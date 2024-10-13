<header class="sticky top-0 before:absolute before:inset-0 before:backdrop-blur-md max-lg:before:bg-white/90 dark:max-lg:before:bg-gray-800/90 before:-z-10 z-30">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:border-b border-gray-200 dark:border-gray-700/60">

            <!-- Header: Left side -->
            <div class="flex justify-between">

                <!-- Hamburger button -->
                <button
                    class="flex text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 lg:hidden"
                    @click.stop="sidebarOpen = !sidebarOpen"
                    aria-controls="sidebar"
                    :aria-expanded="sidebarOpen"
                >
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="5" width="16" height="2" />
                        <rect x="4" y="11" width="16" height="2" />
                        <rect x="4" y="17" width="16" height="2" />
                    </svg>
                    <x-application-logo class="w-auto fill-current text-gray-800 dark:text-gray-200" />
                </button>

            </div>

            <!-- Header: Right side -->
            <div class="flex items-center space-x-3">
                <!-- User button -->
                <x-dropdown-profile align="right" />

            </div>

        </div>
    </div>
</header>
