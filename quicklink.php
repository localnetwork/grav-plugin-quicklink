<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class QuicklinkPlugin
 * @package Grav\Plugin
 */
class QuicklinkPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        // Enable the main event we are interested in
        $this->enable([
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
        ]);
        
    } 
    
    /**
     * if enabled on this page, load the JS + CSS theme.
     */
    public function onTwigSiteVariables()
    {
        $twig   = $this->grav['twig']; 
        $config = $this->config->toArray();
        $loggedInToggle = $config['plugins']['quicklink']['loggedin'];
        $loggedIn = $this->grav['user']['access']['site']['login'];
        $enabled = $config['plugins']['quicklink']['enabled'];
        
        if($enabled == true && $loggedInToggle == 1 && $loggedIn == true) { 
            // DO NOT LOAD ASSETS
        }else {  
            // LOAD ASSETS
            $this->grav['assets']->addJs("plugin://quicklink/assets/quicklink/quicklink.umd.js", ['group' => 'bottom', 'priority' => '100']);
            $this->grav['assets']->addJs("plugin://quicklink/js/quicklink.js", ['group' => 'bottom', 'priority' => '100']);
        }
        
    }
}
