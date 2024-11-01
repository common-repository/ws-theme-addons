<?php

/* Branding */
Redux::setSection( $opt_name , array(
        'icon'      => ' el-icon-smiley',
        'title'     => esc_html__( 'Branding', 'ws-theme-addons' ),
        'desc'     => esc_html__( 'Personalize theme by adding your own images', 'ws-theme-addons' ),
        'fields'    => array(

            array(
                'id'        => 'logo',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Logo', 'ws-theme-addons' ),
                'subtitle'      => esc_html__( 'Upload your logo image here, or leave empty to show the website title instead.', 'ws-theme-addons' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/img/gridlove_logo.png' ) ),
            ),

            array(
                'id'        => 'logo_retina',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Retina logo (2x)', 'ws-theme-addons' ),
                'subtitle'      => esc_html__( 'Optionally upload another logo for devices with retina displays. It should be double the size of your standard logo', 'ws-theme-addons' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/img/gridlove_logo@2x.png' ) ),
            ),

            array(
                'id'        => 'logo_mini',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Mini logo', 'ws-theme-addons' ),
                'subtitle'      => esc_html__( 'Optionally upload another logo which may be used as mobile/tablet logo', 'ws-theme-addons' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/img/gridlove_logo_mini.png' ) ),
            ),

            array(
                'id'        => 'logo_mini_retina',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Mini retina logo (2x)', 'ws-theme-addons' ),
                'subtitle'      => esc_html__( 'Upload double sized mini logo for devices with retina displays', 'ws-theme-addons' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/img/gridlove_logo_mini@2x.png' ) ),
            ),

            array(
                'id'        => 'default_fimg',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Default featured image', 'ws-theme-addons' ),
                'subtitle'      => esc_html__( 'Upload your default featured image/placeholder. It will be displayed for posts that do not have a featured image set.', 'ws-theme-addons' ),
                'default'   => array( 'url' => esc_url( get_template_directory_uri().'/assets/img/gridlove_default.jpg' ) ),
            )
        ) )
);
