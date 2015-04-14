<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Here are all the default values defined
 *  
 * @author ian
 */
class DV {

    var $menu = array(
        array(
            'name' => "Home",
            'url' => "/"
        ),
        array(
            'name' => "Youtube",
            'url' => "/youtube/"
        ),
        array(
            'name' => "Twitch",
            'url' => "/twitch/"
        ),
        array(
            'name' => "Social",
            'url' => "/social/"
        ),
        array(
            'name' => "Other projects",
            'url' => "/other-projects/"
        ),
        array(
            'name' => "ownCloud",
            'url' => "/owncloud/"
        ),
    );
    var $homeCards = array(
        array(
            'imageURL' => "",
            'cardTitle' => "",
            'cardContent' => "",
            'cardAction' => array(
                
            )
        ),
        array(
            'imageURL' => "",
            'cardTitle' => "",
            'cardContent' => "",
            'cardAction' => array(
                
            )
        ),
        array(
            'imageURL' => "",
            'cardTitle' => "",
            'cardContent' => "",
            'cardAction' => array(
                
            )
        ),
        array(
            'imageURL' => "",
            'cardTitle' => "",
            'cardContent' => "",
            'cardAction' => array(
                
            )
        ),
        
    );

    function genMenu() {
        foreach ($this->menu as $value) {
            echo '<li class="waves-effect"><a href="' . $value['url'] . '">' . $value['name'] . '</a></li>';
        }
    }

    function genMenuMobile() {
        foreach ($this->menu as $value) {
            echo '<li class="waves-effect"><a href="' . $value['url'] . '">' . $value['name'] . '</a></li>';
        }
    }

    function genMenufooter() {
        foreach ($this->menu as $value) {
            echo '<li><a class="grey-text text-lighten-3" href="' . $value['url'] . '">' . $value['name'] . '</a></li>';
        }
    }

}
