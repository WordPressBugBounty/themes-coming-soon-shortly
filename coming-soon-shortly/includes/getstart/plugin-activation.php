<?php
if ( ! class_exists( 'Coming_Soon_Shortly_Plugin_Activation_WPElemento_Importer' ) ) {
    /**
     * Coming_Soon_Shortly_Plugin_Activation_WPElemento_Importer initial setup
     *
     * @since 1.6.2
     */

    class Coming_Soon_Shortly_Plugin_Activation_WPElemento_Importer {

        private static $coming_soon_shortly_instance;
        public $coming_soon_shortly_action_count;
        public $coming_soon_shortly_recommended_actions;

        /** Initiator **/
        public static function get_instance() {
          if ( ! isset( self::$coming_soon_shortly_instance) ) {
            self::$coming_soon_shortly_instance = new self();
          }
          return self::$coming_soon_shortly_instance;
        }

        /*  Constructor */
        public function __construct() {

            add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

            // ---------- wpelementoimpoter Plugin Activation -------
            add_filter( 'coming_soon_shortly_recommended_plugins', array($this, 'coming_soon_shortly_recommended_elemento_importer_plugins_array') );

            $coming_soon_shortly_actions                   = $this->coming_soon_shortly_get_recommended_actions();
            $this->coming_soon_shortly_action_count        = $coming_soon_shortly_actions['count'];
            $this->coming_soon_shortly_recommended_actions = $coming_soon_shortly_actions['actions'];

            add_action( 'wp_ajax_create_pattern_setup_builder', array( $this, 'create_pattern_setup_builder' ) );
        }

        public function coming_soon_shortly_recommended_elemento_importer_plugins_array($coming_soon_shortly_plugins){
            $coming_soon_shortly_plugins[] = array(
                    'name'     => esc_html__('WPElemento Importer', 'coming-soon-shortly'),
                    'slug'     =>  'wpelemento-importer',
                    'function' => 'WPElemento_Importer_ThemeWhizzie',
                    'desc'     => esc_html__('We highly recommend installing the WPElemento Importer plugin for importing the demo content with Elementor.', 'coming-soon-shortly'),               
            );
            return $coming_soon_shortly_plugins;
        }

        public function enqueue_scripts() {
            wp_enqueue_script('updates');      
            wp_register_script( 'coming-soon-shortly-plugin-activation-script', esc_url(get_template_directory_uri()) . '/includes/getstart/js/plugin-activation.js', array('jquery') );
            wp_localize_script('coming-soon-shortly-plugin-activation-script', 'coming_soon_shortly_plugin_activate_plugin',
                array(
                    'installing' => esc_html__('Installing', 'coming-soon-shortly'),
                    'activating' => esc_html__('Activating', 'coming-soon-shortly'),
                    'error' => esc_html__('Error', 'coming-soon-shortly'),
                    'ajax_url' => esc_url(admin_url('admin-ajax.php')),
                    'wpelementoimpoter_admin_url' => esc_url(admin_url('admin.php?page=wpelemento-importer-tgmpa-install-plugins')),
                    'addon_admin_url' => esc_url(admin_url('admin.php?page=wpelementoimporter-wizard'))
                )
            );
            wp_enqueue_script( 'coming-soon-shortly-plugin-activation-script' );

        }

        // --------- Plugin Actions ---------
        public function coming_soon_shortly_get_recommended_actions() {

            $coming_soon_shortly_act_count  = 0;
            $coming_soon_shortly_actions_todo = get_option( 'recommending_actions', array());

            $coming_soon_shortly_plugins = $this->coming_soon_shortly_get_recommended_plugins();

            if ($coming_soon_shortly_plugins) {
                foreach ($coming_soon_shortly_plugins as $coming_soon_shortly_key => $coming_soon_shortly_plugin) {
                    $coming_soon_shortly_action = array();
                    if (!isset($coming_soon_shortly_plugin['slug'])) {
                        continue;
                    }

                    $coming_soon_shortly_action['id']   = 'install_' . $coming_soon_shortly_plugin['slug'];
                    $coming_soon_shortly_action['desc'] = '';
                    if (isset($coming_soon_shortly_plugin['desc'])) {
                        $coming_soon_shortly_action['desc'] = $coming_soon_shortly_plugin['desc'];
                    }

                    $coming_soon_shortly_action['name'] = '';
                    if (isset($coming_soon_shortly_plugin['name'])) {
                        $coming_soon_shortly_action['title'] = $coming_soon_shortly_plugin['name'];
                    }

                    $coming_soon_shortly_link_and_is_done  = $this->coming_soon_shortly_get_plugin_buttion($coming_soon_shortly_plugin['slug'], $coming_soon_shortly_plugin['name'], $coming_soon_shortly_plugin['function']);
                    $coming_soon_shortly_action['link']    = $coming_soon_shortly_link_and_is_done['button'];
                    $coming_soon_shortly_action['is_done'] = $coming_soon_shortly_link_and_is_done['done'];
                    if (!$coming_soon_shortly_action['is_done'] && (!isset($coming_soon_shortly_actions_todo[$coming_soon_shortly_action['id']]) || !$coming_soon_shortly_actions_todo[$coming_soon_shortly_action['id']])) {
                        $coming_soon_shortly_act_count++;
                    }
                    $coming_soon_shortly_recommended_actions[] = $coming_soon_shortly_action;
                    $coming_soon_shortly_actions_todo[]        = array('id' => $coming_soon_shortly_action['id'], 'watch' => true);
                }
                return array('count' => $coming_soon_shortly_act_count, 'actions' => $coming_soon_shortly_recommended_actions);
            }

        }

        public function coming_soon_shortly_get_recommended_plugins() {

            $coming_soon_shortly_plugins = apply_filters('coming_soon_shortly_recommended_plugins', array());
            return $coming_soon_shortly_plugins;
        }

        public function coming_soon_shortly_get_plugin_buttion($slug, $name, $function) {
                $coming_soon_shortly_is_done      = false;
                $coming_soon_shortly_button_html  = '';
                $coming_soon_shortly_is_installed = $this->is_plugin_installed($slug);
                $coming_soon_shortly_plugin_path  = $this->get_plugin_basename_from_slug($slug);
                $coming_soon_shortly_is_activeted = (class_exists($function)) ? true : false;
                if (!$coming_soon_shortly_is_installed) {
                    $coming_soon_shortly_plugin_install_url = add_query_arg(
                        array(
                            'action' => 'install-plugin',
                            'plugin' => $slug,
                        ),
                        self_admin_url('update.php')
                    );
                    $coming_soon_shortly_plugin_install_url = wp_nonce_url($coming_soon_shortly_plugin_install_url, 'install-plugin_' . esc_attr($slug));
                    $coming_soon_shortly_button_html        = sprintf('<a class="coming-soon-shortly-plugin-install install-now button-secondary button" data-slug="%1$s" href="%2$s" aria-label="%3$s" data-name="%4$s">%5$s</a>',
                        esc_attr($slug),
                        esc_url($coming_soon_shortly_plugin_install_url),
                        sprintf(esc_html__('Install %s Now', 'coming-soon-shortly'), esc_html($name)),
                        esc_html($name),
                        esc_html__('Install & Activate', 'coming-soon-shortly')
                    );
                } elseif ($coming_soon_shortly_is_installed && !$coming_soon_shortly_is_activeted) {

                    $coming_soon_shortly_plugin_activate_link = add_query_arg(
                        array(
                            'action'        => 'activate',
                            'plugin'        => rawurlencode($coming_soon_shortly_plugin_path),
                            'plugin_status' => 'all',
                            'paged'         => '1',
                            '_wpnonce'      => wp_create_nonce('activate-plugin_' . $coming_soon_shortly_plugin_path),
                        ), self_admin_url('plugins.php')
                    );

                    $coming_soon_shortly_button_html = sprintf('<a class="coming-soon-shortly-plugin-activate activate-now button-primary button" data-slug="%1$s" href="%2$s" aria-label="%3$s" data-name="%4$s">%5$s</a>',
                        esc_attr($slug),
                        esc_url($coming_soon_shortly_plugin_activate_link),
                        sprintf(esc_html__('Activate %s Now', 'coming-soon-shortly'), esc_html($name)),
                        esc_html($name),
                        esc_html__('Activate', 'coming-soon-shortly')
                    );
                } elseif ($coming_soon_shortly_is_activeted) {
                    $coming_soon_shortly_button_html = sprintf('<div class="action-link button disabled"><span class="dashicons dashicons-yes"></span> %s</div>', esc_html__('Active', 'coming-soon-shortly'));
                    $coming_soon_shortly_is_done     = true;
                }

                return array('done' => $coming_soon_shortly_is_done, 'button' => $coming_soon_shortly_button_html);
            }
        public function is_plugin_installed($slug) {
            $coming_soon_shortly_installed_plugins = $this->get_installed_plugins(); // Retrieve a list of all installed plugins (WP cached).
            $coming_soon_shortly_file_path         = $this->get_plugin_basename_from_slug($slug);
            return (!empty($coming_soon_shortly_installed_plugins[$coming_soon_shortly_file_path]));
        }
        public function get_plugin_basename_from_slug($slug) {
            $coming_soon_shortly_keys = array_keys($this->get_installed_plugins());
            foreach ($coming_soon_shortly_keys as $coming_soon_shortly_key) {
                if (preg_match('|^' . $slug . '/|', $coming_soon_shortly_key)) {
                    return $coming_soon_shortly_key;
                }
            }
            return $slug;
        }

        public function get_installed_plugins() {

            if (!function_exists('get_plugins')) {
                require_once ABSPATH . 'wp-admin/includes/plugin.php';
            }

            return get_plugins();
        }
        public function create_pattern_setup_builder() {

            $edit_page = admin_url().'post-new.php?post_type=page&create_pattern=true';
            echo json_encode(['page_id'=>'','edit_page_url'=> $edit_page ]);

            exit;
        }

    }
}
/**
 * Kicking this off by calling 'get_instance()' method
 */
Coming_Soon_Shortly_Plugin_Activation_WPElemento_Importer::get_instance();