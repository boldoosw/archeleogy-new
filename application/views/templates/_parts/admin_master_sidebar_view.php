<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-40 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto  bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ml-2">Дашбоард</span>
                    <span
                        class="inline-flex items-center justify-center px-2 ml-2 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">удахгүй</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/menu'); ?>"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#a30000" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="flex-1 ml-2 whitespace-nowrap">Меню</span>


                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/news'); ?>"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#a30000" viewBox="0 0 20 20">
                        <path
                            d="M22.75,24 L5.25,24 C3.51696854,24 2.10075407,22.6435452 2.00514479,20.9344239 L2,20.75 L2,6.25 C2,5.05913601 2.92516159,4.08435508 4.09595119,4.00519081 L4.25,4 L19.75,4 C20.940864,4 21.9156449,4.92516159 21.9948092,6.09595119 L22,6.25 L22,7 L23.75,7 C24.940864,7 25.9156449,7.92516159 25.9948092,9.09595119 L26,9.25 L26,20.75 C26,22.4830315 24.6435452,23.8992459 22.9344239,23.9948552 L22.75,24 L5.25,24 L22.75,24 Z M5.25,22.5 L22.75,22.5 C23.6681734,22.5 24.4211923,21.7928897 24.4941988,20.8935272 L24.5,20.75 L24.5,9.25 C24.5,8.87030423 24.2178461,8.55650904 23.8517706,8.50684662 L23.75,8.5 L22,8.5 L22,19.25 C22,19.6296958 21.7178461,19.943491 21.3517706,19.9931534 L21.25,20 C20.8703042,20 20.556509,19.7178461 20.5068466,19.3517706 L20.5,19.25 L20.5,6.25 C20.5,5.87030423 20.2178461,5.55650904 19.8517706,5.50684662 L19.75,5.5 L4.25,5.5 C3.87030423,5.5 3.55650904,5.78215388 3.50684662,6.14822944 L3.5,6.25 L3.5,20.75 C3.5,21.6681734 4.20711027,22.4211923 5.10647279,22.4941988 L5.25,22.5 L22.75,22.5 L5.25,22.5 Z M10.2465274,13.0034726 C10.9368834,13.0034726 11.4965274,13.5631166 11.4965274,14.2534726 L11.4965274,17.75 C11.4965274,18.4403559 10.9368834,19 10.2465274,19 L6.75,19 C6.05964406,19 5.5,18.4403559 5.5,17.75 L5.5,14.2534726 C5.5,13.5631166 6.05964406,13.0034726 6.75,13.0034726 L10.2465274,13.0034726 Z M14.25,17.5 L17.7461806,17.5 C18.1603942,17.5 18.4961806,17.8357864 18.4961806,18.25 C18.4961806,18.6296958 18.2140267,18.943491 17.8479512,18.9931534 L17.7461806,19 L14.25,19 C13.8357864,19 13.5,18.6642136 13.5,18.25 C13.5,17.8703042 13.7821539,17.556509 14.1482294,17.5068466 L14.25,17.5 L17.7461806,17.5 L14.25,17.5 Z M9.99652744,14.5034726 L7,14.5034726 L7,17.5 L9.99652744,17.5 L9.99652744,14.5034726 Z M14.25,13.0034726 L17.7461806,13.0034726 C18.1603942,13.0034726 18.4961806,13.339259 18.4961806,13.7534726 C18.4961806,14.1331683 18.2140267,14.4469635 17.8479512,14.4966259 L17.7461806,14.5034726 L14.25,14.5034726 C13.8357864,14.5034726 13.5,14.1676861 13.5,13.7534726 C13.5,13.3737768 13.7821539,13.0599816 14.1482294,13.0103192 L14.25,13.0034726 L17.7461806,13.0034726 L14.25,13.0034726 Z M6.24639584,8.49665793 L17.7461806,8.49665793 C18.1603942,8.49665793 18.4961806,8.83244437 18.4961806,9.24665793 C18.4961806,9.6263537 18.2140267,9.94014889 17.8479512,9.98981132 L17.7461806,9.99665793 L6.24639584,9.99665793 C5.83218228,9.99665793 5.49639584,9.66087149 5.49639584,9.24665793 C5.49639584,8.86696217 5.77854972,8.55316697 6.14462528,8.50350455 L6.24639584,8.49665793 L17.7461806,8.49665793 L6.24639584,8.49665793 Z"
                            id="🎨-Color"> </path>
                    </svg>


                    <span class="flex-1 ml-2 whitespace-nowrap">Мэдээ</span>


                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/menus'); ?>"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#a30000" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="flex-1 ml-2 whitespace-nowrap">Меню Олон хэлээр</span>


                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/contents'); ?>"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#a30000" viewBox="0 0 20 20">
                        <path
                            d="M22.75,24 L5.25,24 C3.51696854,24 2.10075407,22.6435452 2.00514479,20.9344239 L2,20.75 L2,6.25 C2,5.05913601 2.92516159,4.08435508 4.09595119,4.00519081 L4.25,4 L19.75,4 C20.940864,4 21.9156449,4.92516159 21.9948092,6.09595119 L22,6.25 L22,7 L23.75,7 C24.940864,7 25.9156449,7.92516159 25.9948092,9.09595119 L26,9.25 L26,20.75 C26,22.4830315 24.6435452,23.8992459 22.9344239,23.9948552 L22.75,24 L5.25,24 L22.75,24 Z M5.25,22.5 L22.75,22.5 C23.6681734,22.5 24.4211923,21.7928897 24.4941988,20.8935272 L24.5,20.75 L24.5,9.25 C24.5,8.87030423 24.2178461,8.55650904 23.8517706,8.50684662 L23.75,8.5 L22,8.5 L22,19.25 C22,19.6296958 21.7178461,19.943491 21.3517706,19.9931534 L21.25,20 C20.8703042,20 20.556509,19.7178461 20.5068466,19.3517706 L20.5,19.25 L20.5,6.25 C20.5,5.87030423 20.2178461,5.55650904 19.8517706,5.50684662 L19.75,5.5 L4.25,5.5 C3.87030423,5.5 3.55650904,5.78215388 3.50684662,6.14822944 L3.5,6.25 L3.5,20.75 C3.5,21.6681734 4.20711027,22.4211923 5.10647279,22.4941988 L5.25,22.5 L22.75,22.5 L5.25,22.5 Z M10.2465274,13.0034726 C10.9368834,13.0034726 11.4965274,13.5631166 11.4965274,14.2534726 L11.4965274,17.75 C11.4965274,18.4403559 10.9368834,19 10.2465274,19 L6.75,19 C6.05964406,19 5.5,18.4403559 5.5,17.75 L5.5,14.2534726 C5.5,13.5631166 6.05964406,13.0034726 6.75,13.0034726 L10.2465274,13.0034726 Z M14.25,17.5 L17.7461806,17.5 C18.1603942,17.5 18.4961806,17.8357864 18.4961806,18.25 C18.4961806,18.6296958 18.2140267,18.943491 17.8479512,18.9931534 L17.7461806,19 L14.25,19 C13.8357864,19 13.5,18.6642136 13.5,18.25 C13.5,17.8703042 13.7821539,17.556509 14.1482294,17.5068466 L14.25,17.5 L17.7461806,17.5 L14.25,17.5 Z M9.99652744,14.5034726 L7,14.5034726 L7,17.5 L9.99652744,17.5 L9.99652744,14.5034726 Z M14.25,13.0034726 L17.7461806,13.0034726 C18.1603942,13.0034726 18.4961806,13.339259 18.4961806,13.7534726 C18.4961806,14.1331683 18.2140267,14.4469635 17.8479512,14.4966259 L17.7461806,14.5034726 L14.25,14.5034726 C13.8357864,14.5034726 13.5,14.1676861 13.5,13.7534726 C13.5,13.3737768 13.7821539,13.0599816 14.1482294,13.0103192 L14.25,13.0034726 L17.7461806,13.0034726 L14.25,13.0034726 Z M6.24639584,8.49665793 L17.7461806,8.49665793 C18.1603942,8.49665793 18.4961806,8.83244437 18.4961806,9.24665793 C18.4961806,9.6263537 18.2140267,9.94014889 17.8479512,9.98981132 L17.7461806,9.99665793 L6.24639584,9.99665793 C5.83218228,9.99665793 5.49639584,9.66087149 5.49639584,9.24665793 C5.49639584,8.86696217 5.77854972,8.55316697 6.14462528,8.50350455 L6.24639584,8.49665793 L17.7461806,8.49665793 L6.24639584,8.49665793 Z"
                            id="🎨-Color"> </path>
                    </svg>


                    <span class="flex-1 ml-2 whitespace-nowrap">Мэдээ олон хэлээр</span>


                </a>
            </li>
            <li>
                <a href="<?= base_url('apanel/slider'); ?>"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z"
                            clip-rule="evenodd" />
                    </svg>


                    <span class="flex-1 ml-2 whitespace-nowrap"> Слайдер </span>

                </a>
            </li>
            <li>
                <a href="<?= base_url('apanel/category'); ?>"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z"
                            clip-rule="evenodd" />
                    </svg>


                    <span class="flex-1 ml-2 whitespace-nowrap"> Category </span>

                </a>
            </li>
            <li>
                <a href="<?= base_url('apanel/product'); ?>"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12.268 6A2 2 0 0 0 14 9h1v1a2 2 0 0 0 3.04 1.708l-.311 1.496a1 1 0 0 1-.979.796H8.605l.208 1H16a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L4.686 5H4a1 1 0 0 1 0-2h1.5a1 1 0 0 1 .979.796L6.939 6h5.329Z" />
                        <path d="M18 4a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0V8h2a1 1 0 1 0 0-2h-2V4Z" />
                    </svg>

                    <span class="flex-1 ml-2 whitespace-nowrap"> Бүтээгдэхүүн </span>
                    <!-- <span class="inline-flex items-center justify-center px-2 ml-2 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">удахгүй</span> -->

                </a>
            </li>
            <li>
                <a href="<?= base_url('apanel/user'); ?>"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="flex-1 ml-2 whitespace-nowrap">Хэрэглэгч</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('apanel/socialmedia'); ?>"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M18.458 3.11A1 1 0 0 1 19 4v16a1 1 0 0 1-1.581.814L12 16.944V7.056l5.419-3.87a1 1 0 0 1 1.039-.076ZM22 12c0 1.48-.804 2.773-2 3.465v-6.93c1.196.692 2 1.984 2 3.465ZM10 8H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6V8Zm0 9H5v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3Z"
                            clip-rule="evenodd" />
                    </svg>

                    <span class="flex-1 ml-2 whitespace-nowrap">Сошиал медиа</span>
                    <span
                        class="inline-flex items-center justify-center px-2 ml-2 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">удахгүй</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/user/logout'); ?>"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                    </svg>

                    <span class="flex-1 ml-2 whitespace-nowrap">Гарах</span>
                </a>
            </li>
        </ul>
    </div>
</aside>