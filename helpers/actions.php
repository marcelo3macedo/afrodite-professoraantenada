<?php
    include_once 'amp.php';

    function load_actions() {
        if (checkAmpActivate()) {
            return;
        }

        echo <<<EOL
            
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const menuSidebarElement = document.querySelector('.menu-sidebar');
                    menuSidebarElement.addEventListener('click', function() {
                        fn_menu_call();
                    });

                    const actionMoreElement = document.querySelector('.action-more');
                    if (actionMoreElement) {
                        actionMoreElement.addEventListener('click', function() {
                            fn_see_more();
                        });
                    }

                    const mobilePrincipalElement = document.querySelector('.menu-mobile .menu-action');
                    if (mobilePrincipalElement) {
                        mobilePrincipalElement.addEventListener('click', function() {
                            fn_menu_call();
                        });
                    }

                    const mobileSearchElement = document.querySelector('.menu-mobile .search a');
                    if (mobileSearchElement) {
                        mobileSearchElement.addEventListener('click', function() {
                            fn_search_call();
                        });
                    }

                    const mobileDoSearchElement = document.querySelector('.action-search');
                    if (mobileDoSearchElement) {
                        mobileDoSearchElement.addEventListener('click', function() {
                            fn_do_search('search-id')
                        });
                    }

                    const simpleButtonElement = document.querySelector('.simple-button');
                    if (simpleButtonElement) {
                        simpleButtonElement.addEventListener('click', function() {
                            fn_search_call()
                        });
                    }

                    const seeMoreElement = document.querySelector('.category-page .more');
                    if (seeMoreElement) {
                        seeMoreElement.addEventListener('click', function() {
                            fn_more();
                        });
                    }
                });

                function fn_more() {
                    var currentUrl = window.location.href;
                    var url = new URL(currentUrl);
                    var currentPage = parseInt(url.searchParams.get('paged')) || 1;
                    var nextPage = currentPage + 1;

                    url.searchParams.set('paged', nextPage);
                    window.location.href = url.toString();
                }

                function fn_menu_call() {
                    const menuSidebarElement = document.querySelector('.menu-sidebar');
                    const active = window.getComputedStyle(menuSidebarElement).display !== 'none';

                    menuSidebarElement.style.display = active ? 'none' : 'block';
                }

                function fn_search_call() {
                    const menuSearchElement = document.querySelector('.menu-search');
                    const active = window.getComputedStyle(menuSearchElement).display !== 'none';

                    menuSearchElement.style.display = active ? 'none' : 'block';
                }

                function fn_do_search(id) {
                    const element = document.querySelector('#' + id);
                    window.location.href = '/?s=' + element.value;
                }

                function fn_see_more() {
                    const optionsElement = document.querySelector('.action-more .options');
                    const active = window.getComputedStyle(optionsElement).display !== 'none';

                    optionsElement.style.display = active ? 'none' : 'block';
                }
            </script>

        EOL;
    }
?>