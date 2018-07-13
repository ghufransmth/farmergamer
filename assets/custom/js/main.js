"use strict";


jQuery(document).ready(function ($) {


    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    $('#navbar-collapse').find('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top - 40)
                }, 1000);
                if ($('.navbar-toggle').css('display') != 'none') {
                    $(this).parents('.container').find(".navbar-toggle").trigger("click");
                }
                return false;
            }
        }
    });



    /*---------------------------------------------*
     * STICKY scroll
     ---------------------------------------------*/

    $.localScroll();



    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/

    var wow = new WOW({
        mobile: false // trigger animations on mobile devices (default is true)
    });
    wow.init();


    /* ---------------------------------------------------------------------
     Carousel
     ---------------------------------------------------------------------= */

    $('.main_home_content').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: true,
        dots: true,
        nav: false,
        navText: [
            "<i class='lnr lnr-chevron-left'></i>",
            "<i class='lnr lnr-chevron-right'></i>"
        ],
        autoplayHoverPause: true

    });

    $('.main_testimonial_content').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        // autoplayTimeout: 2000, //2 detik
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        navText: [
            "<i class='lnr lnr-chevron-left'></i>",
            "<i class='lnr lnr-chevron-right'></i>"
        ],
        autoplayHoverPause: true

    });

    $('.main_cardwithcarousel').owlCarousel({
        responsiveClass: false,
        autoplay: true,
        autoplayTimeout: 3000, //3 detik
        items: 3,
        loop: true,
        dots: false,
        // nav: true,
        // navText: [
        //     "<i class='lnr lnr-chevron-left'></i>",
        //     "<i class='lnr lnr-chevron-right'></i>"
        // ],
        autoplayHoverPause: false

    });

    $('.card-side-with-carousel').owlCarousel({
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 3000, //3 detik
        items: 1,
        loop: true,
        dots: false,
        // nav: true,
        // navText: [
        //     "<i class='lnr lnr-chevron-left'></i>",
        //     "<i class='lnr lnr-chevron-right'></i>"
        // ],
        autoplayHoverPause: false

    });

    $('.cardDaftarBelanja').owlCarousel({
        responsiveClass: true,
        //autoplay: true,
        //autoplayTimeout: 3000, //3 detik
        items: 4,
        // loop: true,
        dots: false,
        nav: true,
        navText: [
            "<i class='lnr lnr-chevron-left'></i>",
            "<i class='lnr lnr-chevron-right'></i>"
        ],
        autoplayHoverPause: false

    });



// main-menu-scroll

    jQuery(window).scroll(function () {
        var top = jQuery(document).scrollTop();
        var height = 300;
        //alert(batas);

        if (top > height) {
            jQuery('.navbar-fixed-top').addClass('menu-scroll');
        } else {
            jQuery('.navbar-fixed-top').removeClass('menu-scroll');
        }
    });

// scroll Up

    // $(window).scroll(function () {
    //     if ($(this).scrollTop() > 600) {
    //         $('.scrollup').fadeIn('slow');
    //     } else {
    //         $('.scrollup').fadeOut('slow');
    //     }
    // });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.scrollup').addClass('tampil');
        } else {
            $('.scrollup').removeClass('tampil');
        }
    });
    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });



//    $('#menu').slicknav();








    //End
});




$(document).on("scroll", function () {
    if ($(document).scrollTop() > 120) {
        $("nav").addClass("small");
    } else {
        $("nav").removeClass("small");
    }
});

$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});

// TAMBAHAN FUNCTION
    var dropdown = function() {

        $('.has-dropdown').mouseenter(function(){

            var $this = $(this);
            $this
                .find('.dropdown')
                .css('display', 'block')
                .css('background-color', 'white')
                .css('margin-top','8px')
                // .css('padding','20px')
                // .css('position','absolute')
                // .css('width','100%')
                // .addClass('animated-fast fadeInUpMenu');
                .addClass('animated-fast fadeIn');

        }).mouseleave(function(){

            var $this = $(this);

            $this
                .find('.dropdown')
                .css('display', 'none')
                // .removeClass('animated-fast fadeInUpMenu');
                .removeClass('animated-fast fadeIn');
        });

    };

    var cart_dropdown = function() {

        $('.cart-dropdown').mouseenter(function(){

            var $this = $(this);
            $this
                .find('.cart-dd')
                .css('display', 'block')
                .css('background-color', 'white')
                .css('margin-top','8px')
                // .addClass('animated-fast fadeInUpMenu');
                .addClass('animated-fast fadeIn');

        }).mouseleave(function(){

            var $this = $(this);

            $this
                .find('.cart-dd')
                .css('display', 'none')
                // .removeClass('animated-fast fadeInUpMenu');
                .removeClass('animated-fast fadeIn');
        });

    };

    var formTab = function() {

        $('.tab-menu a').on('click', function(event){
            var $this = $(this),
                data = $this.data('tab');

            $('.tab-menu li').removeClass('active');
            $this.closest('li').addClass('active')

            $('.tab .tab-content-inner').removeClass('active');
            $this.closest('.tab').find('.tab-content-inner[data-content="'+data+'"]').addClass('active');

            event.preventDefault();

        });

    };

    // Loading page
    var loaderPage = function() {
        $(".gtco-loader").fadeOut("slow");
    };

    $(function(){
        formTab();
        dropdown();
        cart_dropdown();
        loaderPage();
    });

    //--------------------- SEARCH---------------------
    var MqL = 1170;
    //open search form
    $('.cd-search-trigger').on('click', function(event){
    // $('.search_trigger').on('click', function(event){
        event.preventDefault();
        toggleSearch();
        closeNav();
    });

    function closeNav() {
        $('.cd-nav-trigger').removeClass('nav-is-visible');
        $('.cd-main-header').removeClass('nav-is-visible');
        $('.cd-primary-nav').removeClass('nav-is-visible');
        $('.has-children ul').addClass('is-hidden');
        $('.has-children a').removeClass('selected');
        $('.moves-out').removeClass('moves-out');
        $('.cd-main-content').removeClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            $('body').removeClass('overflow-hidden');
        });
    }

    function toggleSearch(type) {
        if(type=="close") {
            //close serach 
            $('.cd-search').removeClass('is-visible');
            $('.cd-search-trigger').removeClass('search-is-visible');
            $('.cd-overlay').removeClass('search-is-visible');
        } else {
            //toggle search visibility
            $('.cd-search').toggleClass('is-visible');
            $('.cd-search-trigger').toggleClass('search-is-visible');
            $('.cd-overlay').toggleClass('search-is-visible');
            if($(window).width() > MqL && $('.cd-search').hasClass('is-visible')) $('.cd-search').find('input[type="search"]').focus();
            ($('.cd-search').hasClass('is-visible')) ? $('.cd-overlay').addClass('is-visible') : $('.cd-overlay').removeClass('is-visible') ;
        }
    }

    // AKTIFKAN TOOLTIP BOOSTRAP
    $(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
    // END TOOLTIP BOOTSTRAP

    // SELECT2
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();

        // untuk hilangin search box nya
        $('.select2-without-search').select2({
            minimumResultsForSearch: Infinity
        });

        $('.select2-nama_game').select2({
            minimumResultsForSearch: Infinity,
            allowClear: true,
            placeholder: "Pilih Game",
            tags: true
        });
    });

    $(function(){
        $(".select2-tanggal").select2({
          tags: true, // berfungsi untuk menampilkan selected agar tidak terjadi duplikat di select
          allowClear: true, // untuk menghapus , WAJIB DISERTAKAN DENGAN PLACEHOLDER!!!
          placeholder:"Tanggal"
          // minimumResultsForSearch: Infinity
        });
        $(".select2-bulan").select2({
          tags: true,
          allowClear: true,
          placeholder:"Bulan"
          // minimumResultsForSearch: Infinity
        });
        $(".select2-tahun").select2({
          tags: true,
          allowClear: true,
          placeholder:"Tahun"
          // minimumResultsForSearch: Infinity
        });
    });

    // NAMA-NAMA NEGARA & PILIHAN SELECT NYA
    $(function(){
        $(".js-example-data-array").select2({
          data: nama_negara,
          tags: true,
          allowClear: true,
          placeholder: "Pilih Nama Negara"
          // minimumResultsForSearch: Infinity
        })
    });
    
    var nama_negara = [
      { id: 'Afganistan', text: 'Afghanistan', code: 'AF' },
      { id: 'Åland Islands', text: 'Åland Islands', code: 'AX' },
      { id: 'Albania', text: 'Albania', code: 'AL' },
      { id: 'Algeria', text: 'Algeria', code: 'DZ' },
      { id: 'American Samoa', text: 'American Samoa', code: 'AS' },
      { id: 'Andorra', text: 'Andorra', code: 'AD' },
      { id: 'Angola', text: 'Angola', code: 'AO' },
      { id: 'Anguilla', text: 'Anguilla', code: 'AI' },
      { id: 'Antarctica', text: 'Antarctica', code: 'AQ' },
      { id: 'Antigua and Barbuda', text: 'Antigua and Barbuda', code: 'AG' },
      { id: 'Antigua and Barbuda', text: 'Argentina', code: 'AR' },
      { id: 'Armenia', text: 'Armenia', code: 'AM' },
      { id: 'Aruba', text: 'Aruba', code: 'AW' },
      { id: 'Australia', text: 'Australia', code: 'AU' },
      { id: 'Austria', text: 'Austria', code: 'AT' },
      { id: 'Azerbaijan', text: 'Azerbaijan', code: 'AZ' },
      { id: 'Bahamas', text: 'Bahamas', code: 'BS' },
      { id: 'Bahrain', text: 'Bahrain', code: 'BH' },
      { id: 'Bangladesh', text: 'Bangladesh', code: 'BD' },
      { id: 'Barbados', text: 'Barbados', code: 'BB' },
      { id: 'Belarus', text: 'Belarus', code: 'BY' },
      { id: 'Belgium', text: 'Belgium', code: 'BE' },
      { id: 'Belize', text: 'Belize', code: 'BZ' },
      { id: 'Benin', text: 'Benin', code: 'BJ' },
      { id: 'Bermuda', text: 'Bermuda', code: 'BM' },
      { id: 'Bhutan', text: 'Bhutan', code: 'BT' },
      { id: 'Bolivia', text: 'Bolivia', code: 'BO' },
      { id: 'Bosnia and Herzegovina', text: 'Bosnia and Herzegovina', code: 'BA' },
      { id: 'Botswana', text: 'Botswana', code: 'BW' },
      { id: 'Bouvet Island', text: 'Bouvet Island', code: 'BV' },
      { id: 'Brazil', text: 'Brazil', code: 'BR' },
      { id: 'British Indian Ocean Territory', text: 'British Indian Ocean Territory', code: 'IO' },
      { id: 'Brunei Darussalam', text: 'Brunei Darussalam', code: 'BN' },
      { id: 'Bulgaria', text: 'Bulgaria', code: 'BG' },
      { id: 'Burkina Faso', text: 'Burkina Faso', code: 'BF' },
      { id: 'Burundi', text: 'Burundi', code: 'BI' },
      { id: 'Cambodia', text: 'Cambodia', code: 'KH' },
      { id: 'Cameroon', text: 'Cameroon', code: 'CM' },
      { id: 'Canada', text: 'Canada', code: 'CA' },
      { id: 'Cape Verde', text: 'Cape Verde', code: 'CV' },
      { id: 'Cayman Islands', text: 'Cayman Islands', code: 'KY' },
      { id: 'Central African Republic', text: 'Central African Republic', code: 'CF' },
      { id: 'Chad', text: 'Chad', code: 'TD' },
      { id: 'Chile', text: 'Chile', code: 'CL' },
      { id: 'China', text: 'China', code: 'CN' },
      { id: 'Christmas Island', text: 'Christmas Island', code: 'CX' },
      { id: 'Cocos (Keeling) Islands', text: 'Cocos (Keeling) Islands', code: 'CC' },
      { id: 'Colombia', text: 'Colombia', code: 'CO' },
      { id: 'Comoros', text: 'Comoros', code: 'KM' },
      { id: 'Congo', text: 'Congo', code: 'CG' },
      { id: 'Congo, The Democratic Republic of the', text: 'Congo, The Democratic Republic of the', code: 'CD' },
      { id: 'Cook Islands', text: 'Cook Islands', code: 'CK' },
      { id: 'Costa Rica', text: 'Costa Rica', code: 'CR' },
      { id: 'Cote D\'Ivoire', text: 'Cote D\'Ivoire', code: 'CI' },
      { id: 'Croatia', text: 'Croatia', code: 'HR' },
      { id: 'Cuba', text: 'Cuba', code: 'CU' },
      { id: 'Cyprus', text: 'Cyprus', code: 'CY' },
      { id: 'Czech Republic', text: 'Czech Republic', code: 'CZ' },
      { id: 'Denmark', text: 'Denmark', code: 'DK' },
      { id: 'Djibouti', text: 'Djibouti', code: 'DJ' },
      { id: 'Dominica', text: 'Dominica', code: 'DM' },
      { id: 'Dominican Republic', text: 'Dominican Republic', code: 'DO' },
      { id: 'Ecuador', text: 'Ecuador', code: 'EC' },
      { id: 'Egypt', text: 'Egypt', code: 'EG' },
      { id: 'El Salvador', text: 'El Salvador', code: 'SV' },
      { id: 'Equatorial Guinea', text: 'Equatorial Guinea', code: 'GQ' },
      { id: 'Eritrea', text: 'Eritrea', code: 'ER' },
      { id: 'Estonia', text: 'Estonia', code: 'EE' },
      { id: 'Ethiopia', text: 'Ethiopia', code: 'ET' },
      { id: 'Falkland Islands (Malvinas)', text: 'Falkland Islands (Malvinas)', code: 'FK' },
      { id: 'Faroe Islands', text: 'Faroe Islands', code: 'FO' },
      { id: 'Fiji', text: 'Fiji', code: 'FJ' },
      { id: 'Finland', text: 'Finland', code: 'FI' },
      { id: 'France', text: 'France', code: 'FR' },
      { id: 'French Guiana', text: 'French Guiana', code: 'GF' },
      { id: 'French Polynesia', text: 'French Polynesia', code: 'PF' },
      { id: 'French Southern Territories', text: 'French Southern Territories', code: 'TF' },
      { id: 'Gabon', text: 'Gabon', code: 'GA' },
      { id: 'Gambia', text: 'Gambia', code: 'GM' },
      { id: 'Georgia', text: 'Georgia', code: 'GE' },
      { id: 'Germany', text: 'Germany', code: 'DE' },
      { id: 'Ghana', text: 'Ghana', code: 'GH' },
      { id: 'Gibraltar', text: 'Gibraltar', code: 'GI' },
      { id: 'Greece', text: 'Greece', code: 'GR' },
      { id: 'Greenland', text: 'Greenland', code: 'GL' },
      { id: 'Grenada', text: 'Grenada', code: 'GD' },
      { id: 'Guadeloupe', text: 'Guadeloupe', code: 'GP' },
      { id: 'Guam', text: 'Guam', code: 'GU' },
      { id: 'Guatemala', text: 'Guatemala', code: 'GT' },
      { id: 'Guernsey', text: 'Guernsey', code: 'GG' },
      { id: 'Guinea', text: 'Guinea', code: 'GN' },
      { id: 'Guinea-Bissau', text: 'Guinea-Bissau', code: 'GW' },
      { id: 'Guyana', text: 'Guyana', code: 'GY' },
      { id: 'Haiti', text: 'Haiti', code: 'HT' },
      { id: 'Heard Island and Mcdonald Islands', text: 'Heard Island and Mcdonald Islands', code: 'HM' },
      { id: 'Holy See (Vatican City State)', text: 'Holy See (Vatican City State)', code: 'VA' },
      { id: 'Honduras', text: 'Honduras', code: 'HN' },
      { id: 'Hong Kong', text: 'Hong Kong', code: 'HK' },
      { id: 'Hungary', text: 'Hungary', code: 'HU' },
      { id: 'Iceland', text: 'Iceland', code: 'IS' },
      { id: 'India', text: 'India', code: 'IN' },
      { id: 'Indonesia', text: 'Indonesia', code: 'ID' },
      { id: 'Iran, Islamic Republic Of', text: 'Iran, Islamic Republic Of', code: 'IR' },
      { id: 'Iraq', text: 'Iraq', code: 'IQ' },
      { id: 'Ireland', text: 'Ireland', code: 'IE' },
      { id: 'Isle of Man', text: 'Isle of Man', code: 'IM' },
      { id: 'Israel', text: 'Israel', code: 'IL' },
      { id: 'Italy', text: 'Italy', code: 'IT' },
      { id: 'Jamaica', text: 'Jamaica', code: 'JM' },
      { id: 'Japan', text: 'Japan', code: 'JP' },
      { id: 'Jersey', text: 'Jersey', code: 'JE' },
      { id: 'Jordan', text: 'Jordan', code: 'JO' },
      { id: 'Kazakhstan', text: 'Kazakhstan', code: 'KZ' },
      { id: 'Kenya', text: 'Kenya', code: 'KE' },
      { id: 'Kiribati', text: 'Kiribati', code: 'KI' },
      { id: 'Democratic People\'s Republic of Korea', text: 'Democratic People\'s Republic of Korea', code: 'KP' },
      { id: 'Korea, Republic of', text: 'Korea, Republic of', code: 'KR' },
      { id: 'Kosovo', text: 'Kosovo', code: 'XK' },
      { id: 'Kuwait', text: 'Kuwait', code: 'KW' },
      { id: 'Kyrgyzstan', text: 'Kyrgyzstan', code: 'KG' },
      { id: 'Lao People\'s Democratic Republic', text: 'Lao People\'s Democratic Republic', code: 'LA' },
      { id: 'Latvia', text: 'Latvia', code: 'LV' },
      { id: 'Lebanon', text: 'Lebanon', code: 'LB' },
      { id: 'Lesotho', text: 'Lesotho', code: 'LS' },
      { id: 'Liberia', text: 'Liberia', code: 'LR' },
      { id: 'Libyan Arab Jamahiriya', text: 'Libyan Arab Jamahiriya', code: 'LY' },
      { id: 'Liechtenstein', text: 'Liechtenstein', code: 'LI' },
      { id: 'Lithuania', text: 'Lithuania', code: 'LT' },
      { id: 'Luxembourg', text: 'Luxembourg', code: 'LU' },
      { id: 'Macao', text: 'Macao', code: 'MO' },
      { id: 'Macedonia, The Former Yugoslav Republic of', text: 'Macedonia, The Former Yugoslav Republic of', code: 'MK' },
      { id: 'Madagascar', text: 'Madagascar', code: 'MG' },
      { id: 'Malawi', text: 'Malawi', code: 'MW' },
      { id: 'Malaysia', text: 'Malaysia', code: 'MY' },
      { id: 'Maldives', text: 'Maldives', code: 'MV' },
      { id: 'Mali', text: 'Mali', code: 'ML' },
      { id: 'Malta', text: 'Malta', code: 'MT' },
      { id: 'Marshall Islands', text: 'Marshall Islands', code: 'MH' },
      { id: 'Martinique', text: 'Martinique', code: 'MQ' },
      { id: 'Mauritania', text: 'Mauritania', code: 'MR' },
      { id: 'Mauritius', text: 'Mauritius', code: 'MU' },
      { id: 'Mayotte', text: 'Mayotte', code: 'YT' },
      { id: 'Mexico', text: 'Mexico', code: 'MX' },
      { id: 'Micronesia, Federated States of', text: 'Micronesia, Federated States of', code: 'FM' },
      { id: 'Moldova, Republic of', text: 'Moldova, Republic of', code: 'MD' },
      { id: 'Monaco', text: 'Monaco', code: 'MC' },
      { id: 'Mongolia', text: 'Mongolia', code: 'MN' },
      { id: 'Montenegro', text: 'Montenegro', code: 'ME' },
      { id: 'Montserrat', text: 'Montserrat', code: 'MS' },
      { id: 'Morocco', text: 'Morocco', code: 'MA' },
      { id: 'Mozambique', text: 'Mozambique', code: 'MZ' },
      { id: 'Myanmar', text: 'Myanmar', code: 'MM' },
      { id: 'Namibia', text: 'Namibia', code: 'NA' },
      { id: 'Nauru', text: 'Nauru', code: 'NR' },
      { id: 'Nepal', text: 'Nepal', code: 'NP' },
      { id: 'Netherlands', text: 'Netherlands', code: 'NL' },
      { id: 'Netherlands Antilles', text: 'Netherlands Antilles', code: 'AN' },
      { id: 'New Caledonia', text: 'New Caledonia', code: 'NC' },
      { id: 'New Zealand', text: 'New Zealand', code: 'NZ' },
      { id: 'Nicaragua', text: 'Nicaragua', code: 'NI' },
      { id: 'Niger', text: 'Niger', code: 'NE' },
      { id: 'Nigeria', text: 'Nigeria', code: 'NG' },
      { id: 'Niue', text: 'Niue', code: 'NU' },
      { id: 'Norfolk Island', text: 'Norfolk Island', code: 'NF' },
      { id: 'Northern Mariana Islands', text: 'Northern Mariana Islands', code: 'MP' },
      { id: 'Norway', text: 'Norway', code: 'NO' },
      { id: 'Oman', text: 'Oman', code: 'OM' },
      { id: 'Pakistan', text: 'Pakistan', code: 'PK' },
      { id: 'Palau', text: 'Palau', code: 'PW' },
      { id: 'Palestinian Territory, Occupied', text: 'Palestinian Territory, Occupied', code: 'PS' },
      { id: 'Panama', text: 'Panama', code: 'PA' },
      { id: 'Papua New Guinea', text: 'Papua New Guinea', code: 'PG' },
      { id: 'Paraguay', text: 'Paraguay', code: 'PY' },
      { id: 'Peru', text: 'Peru', code: 'PE' },
      { id: 'Philippines', text: 'Philippines', code: 'PH' },
      { id: 'Pitcairn', text: 'Pitcairn', code: 'PN' },
      { id: 'Poland', text: 'Poland', code: 'PL' },
      { id: 'Portugal', text: 'Portugal', code: 'PT' },
      { id: 'Puerto Rico', text: 'Puerto Rico', code: 'PR' },
      { id: 'Qatar', text: 'Qatar', code: 'QA' },
      { id: 'Reunion', text: 'Reunion', code: 'RE' },
      { id: 'Romania', text: 'Romania', code: 'RO' },
      { id: 'Russian Federation', text: 'Russian Federation', code: 'RU' },
      { id: 'Rwanda', text: 'Rwanda', code: 'RW' },
      { id: 'Saint Helena', text: 'Saint Helena', code: 'SH' },
      { id: 'Saint Kitts and Nevis', text: 'Saint Kitts and Nevis', code: 'KN' },
      { id: 'Saint Lucia', text: 'Saint Lucia', code: 'LC' },
      { id: 'Saint Pierre and Miquelon', text: 'Saint Pierre and Miquelon', code: 'PM' },
      { id: 'Saint Vincent and the Grenadines', text: 'Saint Vincent and the Grenadines', code: 'VC' },
      { id: 'Samoa', text: 'Samoa', code: 'WS' },
      { id: 'San Marino', text: 'San Marino', code: 'SM' },
      { id: 'Sao Tome and Principe', text: 'Sao Tome and Principe', code: 'ST' },
      { id: 'Saudi Arabia', text: 'Saudi Arabia', code: 'SA' },
      { id: 'Senegal', text: 'Senegal', code: 'SN' },
      { id: 'Serbia', text: 'Serbia', code: 'RS' },
      { id: 'Seychelles', text: 'Seychelles', code: 'SC' },
      { id: 'Sierra Leone', text: 'Sierra Leone', code: 'SL' },
      { id: 'Singapore', text: 'Singapore', code: 'SG' },
      { id: 'Slovakia', text: 'Slovakia', code: 'SK' },
      { id: 'Slovenia', text: 'Slovenia', code: 'SI' },
      { id: 'Solomon Islands', text: 'Solomon Islands', code: 'SB' },
      { id: 'Somalia', text: 'Somalia', code: 'SO' },
      { id: 'South Africa', text: 'South Africa', code: 'ZA' },
      { id: 'South Georgia and the South Sandwich Islands', text: 'South Georgia and the South Sandwich Islands', code: 'GS' },
      { id: 'Spain', text: 'Spain', code: 'ES' },
      { id: 'Sri Lanka', text: 'Sri Lanka', code: 'LK' },
      { id: 'Sudan', text: 'Sudan', code: 'SD' },
      { id: 'Suriname', text: 'Suriname', code: 'SR' },
      { id: 'Svalbard and Jan Mayen', text: 'Svalbard and Jan Mayen', code: 'SJ' },
      { id: 'Swaziland', text: 'Swaziland', code: 'SZ' },
      { id: 'Sweden', text: 'Sweden', code: 'SE' },
      { id: 'Switzerland', text: 'Switzerland', code: 'CH' },
      { id: 'Syrian Arab Republic', text: 'Syrian Arab Republic', code: 'SY' },
      { id: 'Taiwan', text: 'Taiwan', code: 'TW' },
      { id: 'Tajikistan', text: 'Tajikistan', code: 'TJ' },
      { id: 'Tanzania, United Republic of', text: 'Tanzania, United Republic of', code: 'TZ' },
      { id: 'Thailand', text: 'Thailand', code: 'TH' },
      { id: 'Timor-Leste', text: 'Timor-Leste', code: 'TL' },
      { id: 'Togo', text: 'Togo', code: 'TG' },
      { id: 'Tokelau', text: 'Tokelau', code: 'TK' },
      { id: 'Tonga', text: 'Tonga', code: 'TO' },
      { id: 'Trinidad and Tobago', text: 'Trinidad and Tobago', code: 'TT' },
      { id: 'Tunisia', text: 'Tunisia', code: 'TN' },
      { id: 'Turkey', text: 'Turkey', code: 'TR' },
      { id: 'Turkmenistan', text: 'Turkmenistan', code: 'TM' },
      { id: 'Turks and Caicos Islands', text: 'Turks and Caicos Islands', code: 'TC' },
      { id: 'Tuvalu', text: 'Tuvalu', code: 'TV' },
      { id: 'Uganda', text: 'Uganda', code: 'UG' },
      { id: 'Ukraine', text: 'Ukraine', code: 'UA' },
      { id: 'United Arab Emirates', text: 'United Arab Emirates', code: 'AE' },
      { id: 'United Kingdom', text: 'United Kingdom', code: 'GB' },
      { id: 'United States', text: 'United States', code: 'US' },
      { id: 'United States Minor Outlying Islands', text: 'United States Minor Outlying Islands', code: 'UM' },
      { id: 'Uruguay', text: 'Uruguay', code: 'UY' },
      { id: 'Uzbekistan', text: 'Uzbekistan', code: 'UZ' },
      { id: 'Vanuatu', text: 'Vanuatu', code: 'VU' },
      { id: 'Venezuela', text: 'Venezuela', code: 'VE' },
      { id: 'Viet Nam', text: 'Viet Nam', code: 'VN' },
      { id: 'Virgin Islands, British', text: 'Virgin Islands, British', code: 'VG' },
      { id: 'Virgin Islands, U.S.', text: 'Virgin Islands, U.S.', code: 'VI' },
      { id: 'Wallis and Futuna', text: 'Wallis and Futuna', code: 'WF' },
      { id: 'Western Sahara', text: 'Western Sahara', code: 'EH' },
      { id: 'Yemen', text: 'Yemen', code: 'YE' },
      { id: 'Zambia', text: 'Zambia', code: 'ZM' },
      { id: 'Zimbabwe', text: 'Zimbabwe', code: 'ZW' }
    ]

    // END SELECT2