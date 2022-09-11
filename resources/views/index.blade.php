<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder:text-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="h-4 w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="ideas-container space-y-6 my-7">
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2"
                        >
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button
                                @click="isOpen = ! isOpen"
                                class="relative border transition duration-150 ease-in bg-gray-100 hover:bg-gray-200 rounded-full h-7 py-2 px-3"
                            >
                                <svg fill="currentColor" width="24" height="6">
                                    <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, 5)">
                                <ul
                                    x-cloak
                                    x-show="isOpen"
                                    x-transition.origin.top.left.duration.100ms
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8"
                                >
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">
                                            Mark as Spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">
                                            Delete Post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ideas-container space-y-6 my-7">
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-blue text-white border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">
                        Voted
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=5" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">
                            When a title meets a title
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi, dolores ex id ipsa nesciunt, pariatur quaerat quisquam repudiandae sequi totam ullam unde ut! Error esse ipsa magni sint. Dolorem doloremque, in labore magnam nemo nihil qui sapiente sequi vel voluptatibus. Et iusto quam veniam. Libero nesciunt quasi velit. Aliquid aperiam, cumque doloremque excepturi laudantium minima molestiae, omnis optio, quae quia quos sed veniam. Accusamus ad aliquid beatae debitis, deleniti dolor, dolore doloremque dolorum esse eveniet expedita explicabo facilis harum id illum ipsa magni molestias nihil sit tenetur ullam voluptas voluptate. Accusantium cumque enim fugiat iure iusto, molestiae numquam quibusdam.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-yellow text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                In Progress
                            </div>
                            <button class="relative transition duration-150 ease-in bg-gray-100 hover:bg-gray-200 rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor"
                                     width="24"
                                     height="6"
                                >
                                    <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                          style="color: rgba(163, 163, 163, 5)">
                                        <ul class="absolute hidden w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                            <li>
                                                <a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">
                                                    Mark as Spam
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">
                                                    Delete Post
                                                </a>
                                            </li>
                                        </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ideas-container space-y-6 my-7">
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">32</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Titles can't be random</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi, dolores ex id ipsa nesciunt, pariatur quaerat quisquam repudiandae sequi totam ullam unde ut! Error esse ipsa magni sint. Dolorem doloremque, in labore magnam nemo nihil qui sapiente sequi vel voluptatibus. Et iusto quam veniam. Libero nesciunt quasi velit. Aliquid aperiam, cumque doloremque excepturi laudantium minima molestiae, omnis optio, quae quia quos sed veniam. Accusamus ad aliquid beatae debitis, deleniti dolor, dolore doloremque dolorum esse eveniet expedita explicabo facilis harum id illum ipsa magni molestias nihil sit tenetur ullam voluptas voluptate. Accusantium cumque enim fugiat iure iusto, molestiae numquam quibusdam.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-red text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Closed
                            </div>
                            <button class="relative transition duration-150 ease-in bg-gray-100 hover:bg-gray-200 rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor"
                                     width="24"
                                     height="6"
                                >
                                    <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                          style="color: rgba(163, 163, 163, 5)">
                                        <ul class="absolute hidden w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                            <li>
                                                <a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">
                                                    Mark as Spam
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">
                                                    Delete Post
                                                </a>
                                            </li>
                                        </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ideas-container space-y-6 my-7">
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">
                        22
                    </div>
                    <div class="text-gray-500">
                        Votes
                    </div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=7" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">
                            Looking for a great title
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi, dolores ex id ipsa nesciunt, pariatur quaerat quisquam repudiandae sequi totam ullam unde ut! Error esse ipsa magni sint. Dolorem doloremque, in labore magnam nemo nihil qui sapiente sequi vel voluptatibus. Et iusto quam veniam. Libero nesciunt quasi velit. Aliquid aperiam, cumque doloremque excepturi laudantium minima molestiae, omnis optio, quae quia quos sed veniam. Accusamus ad aliquid beatae debitis, deleniti dolor, dolore doloremque dolorum esse eveniet expedita explicabo facilis harum id illum ipsa magni molestias nihil sit tenetur ullam voluptas voluptate. Accusantium cumque enim fugiat iure iusto, molestiae numquam quibusdam.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-green text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Implemented
                            </div>
                            <button class="relative transition duration-150 ease-in bg-gray-100 hover:bg-gray-200 rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor"
                                     width="24"
                                     height="6"
                                >
                                    <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                          style="color: rgba(163, 163, 163, 5)">
                                        <ul class="absolute hidden w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                            <li>
                                                <a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">
                                                    Mark as Spam
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">
                                                    Delete Post
                                                </a>
                                            </li>
                                        </ul>
                                    </path>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ideas-container space-y-6 my-7">
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">
                        2
                    </div>
                    <div class="text-gray-500">
                        Votes
                    </div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=9" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">
                            Why things are things
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi, dolores ex id ipsa nesciunt, pariatur quaerat quisquam repudiandae sequi totam ullam unde ut! Error esse ipsa magni sint. Dolorem doloremque, in labore magnam nemo nihil qui sapiente sequi vel voluptatibus. Et iusto quam veniam. Libero nesciunt quasi velit. Aliquid aperiam, cumque doloremque excepturi laudantium minima molestiae, omnis optio, quae quia quos sed veniam. Accusamus ad aliquid beatae debitis, deleniti dolor, dolore doloremque dolorum esse eveniet expedita explicabo facilis harum id illum ipsa magni molestias nihil sit tenetur ullam voluptas voluptate. Accusantium cumque enim fugiat iure iusto, molestiae numquam quibusdam.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-purple text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Considering
                            </div>
                            <button class="relative transition duration-150 ease-in bg-gray-100 hover:bg-gray-200 rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor"
                                     width="24"
                                     height="6"
                                >
                                    <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                          style="color: rgba(163, 163, 163, 5)">
                                        <ul class="absolute hidden w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                            <li>
                                                <a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">
                                                    Mark as Spam
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">
                                                    Delete Post
                                                </a>
                                            </li>
                                        </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
