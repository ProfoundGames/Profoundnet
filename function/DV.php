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
            'url' => "/",
            'title' => "Home"
        ),
        array(
            'name' => "Youtube",
            'url' => "/youtube/",
            'title' => "Youtube"
        ),
        array(
            'name' => "Twitch",
            'url' => "/twitch/",
            'title' => "Twitch"
        ),
        array(
            'name' => "Beam",
            'url' => "/beam/",
            'title' => "Beam"
        ),
        array(
            'name' => "Other projects",
            'url' => "/otherprojects/",
            'title' => "Other projects"
        ),
        array(
            'name' => "ownCloud Login",
            'url' => "/owncloud/",
            'title' => "ownCloud"
        ),
        array(
            'name' => "Yourl Login",
            'url' => "/s/admin/",
            'title' => "Yourl"
        ),
        
    );
    
    function getTitle($param) {
        
        foreach ($this->menu as $value) {
            if (trim($value['url'],'/') == $param) {
                echo $value['title'];
            }
        }
    }
    
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
    
    
    var $socialLinks = array (
        array(
            'socialName' => "Youtube",
            'socialLink' => "http://profoundnet.com/s/ProfoundGamesYT/",
            'socialFA' => "fa-youtube",
            'socialLogoColor' => "red-text",
            'SocialWavesColor' => "waves-red",
        ),
        array(
            'socialName' => "Twitch",
            'socialLink' => "http://profoundnet.com/s/ProfoundGamesTW/",
            'socialFA' => "fa-twitch",
            'socialLogoColor' => "purple-text",
            'SocialWavesColor' => "waves-purple",
        ),
        array(
            'socialName' => "Twitter",
            'socialLink' => "http://profoundnet.com/s/ProfoundGamesT/",
            'socialFA' => "fa-twitter",
            'socialLogoColor' => "blue-text lighten-1",
            'SocialWavesColor' => "waves-blue",
        ),
        array(
            'socialName' => "Facebook",
            'socialLink' => "http://profoundnet.com/s/ProfoundGamesF/",
            'socialFA' => "fa-facebook",
            'socialLogoColor' => "indigo-text darken-4",
            'SocialWavesColor' => "waves-indigo",
        ),
    );
    
    function SocialPage($param) {
        foreach ($this->socialLinks as $value) {
            echo '<li class="z-depth-2 waves-effect ' . $value['SocialWavesColor'] . '"><a href="' . $value['socialLink'] . '" class="' . $value['socialLogoColor'] . '">' . $value['socialName']. '<i class="fa ' . $value['socialFA'] . '"></i></a></li>';
        }
    }
    
    function SocialFooter($param) {
        foreach ($this->socialLinks as $value) {
            echo '<a href="' . $value['socialLink'] . '"><div class="socialFooter btn-floating btn-large blue-grey lighten-3"><i class="fa ' . $value['socialFA'] . ' ' . $value['socialLogoColor'] . '"></i></div></a>';
        }
    }
    
    
    
}
