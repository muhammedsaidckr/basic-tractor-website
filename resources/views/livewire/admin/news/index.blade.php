<div class="pb-20">
    <div class="border-b border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <div class="flex-1 min-w-0">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
                Bizden Haberler
            </h1>
        </div>
        <div class="flex-1 flex">
            <div class="w-full flex md:ml-0">
                <label for="search_field" class="sr-only">Search</label>
                <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none" aria-hidden="true">
                        <!-- Heroicon name: solid/search -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <input id="search_field" name="search_field"
                           class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm"
                           placeholder="Ara ..." type="search" wire:model.debounce.500ms="search">
                </div>
            </div>
        </div>

        <div class="mt-4 flex sm:mt-0 sm:ml-4">

            <a href="{{route('admin.news.create')}}"
               class="order-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:order-1 sm:ml-3">
                Yeni Oluştur
            </a>
        </div>
    </div>

    <div class="mt-10 sm:hidden">
        <div class="px-4 sm:px-6">
            <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Video ve Fotoğraflar</h2>
        </div>
        <ul class="mt-3 border-t border-gray-200 divide-y divide-gray-100">
            @if($news->count() > 0)
                @foreach($news as $key=> $n)
                    <li>
                        <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
              <span class="flex items-center truncate space-x-3">
                <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-pink-600" aria-hidden="true"></span>
                <span class="font-medium truncate text-sm leading-6">
{{$n->title}}
                  <span class="truncate font-normal text-gray-500"></span>
                </span>
              </span>
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </li>
            @endforeach
        @endif
        <!-- More projects... -->
        </ul>
    </div>

    <!-- Projects table (small breakpoint and up) -->
    <div class="hidden mt-8 sm:block pb-8">
        <div class="align-middle inline-block min-w-full border-b border-gray-200">
            <table class="min-w-full">
                @if($news->count() > 0)
                    <thead>
                    <tr class="border-t border-gray-200">
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <span class="lg:pl-2">Başlık</span>
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{--                        Durum--}}
                        </th>
                        <th class="hidden whitespace-nowrap md:table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Son Güncelleme
                        </th>
                        <th class="pr-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                    @foreach($news as $key=> $n)
                        <tr>
                            <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                                <div class="flex items-center space-x-3 lg:pl-2">
                                    <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600"
                                         aria-hidden="true"></div>
                                    <a href="#" class="truncate hover:text-gray-600">
                      <span>
{{$n->title}}
                        <span class="text-gray-500 font-normal"></span>
                      </span>
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                                {{--                        <div class="flex items-center space-x-2">--}}
                                {{--                            <div class="flex flex-shrink-0 -space-x-1">--}}
                                {{--                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"--}}
                                {{--                                     src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"--}}
                                {{--                                     alt="Dries Vincent">--}}

                                {{--                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"--}}
                                {{--                                     src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"--}}
                                {{--                                     alt="Lindsay Walton">--}}

                                {{--                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"--}}
                                {{--                                     src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"--}}
                                {{--                                     alt="Courtney Henry">--}}

                                {{--                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"--}}
                                {{--                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"--}}
                                {{--                                     alt="Tom Cook">--}}
                                {{--                            </div>--}}

                                {{--                            <span class="flex-shrink-0 text-xs leading-5 font-medium">+8</span>--}}
                                {{--                        </div>--}}
                            </td>
                            <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                                {{$n->created_at}}
                            </td>
                            <td class="pr-6" x-data="{ show: false }">
                                <div class="relative flex justify-end items-center">
                                    <button type="button" x-on:click="show = !show"
                                            class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500"
                                            id="project-options-menu-0-button" aria-expanded="false"
                                            aria-haspopup="true">
                                        <span class="sr-only">Open options</span>
                                        <!-- Heroicon name: solid/dots-vertical -->
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                             fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                        </svg>
                                    </button>

                                    <!--
                                      Dropdown menu, show/hide based on menu state.

                                      Entering: "transition ease-out duration-100"
                                        From: "transform opacity-0 scale-95"
                                        To: "transform opacity-100 scale-100"
                                      Leaving: "transition ease-in duration-75"
                                        From: "transform opacity-100 scale-100"
                                        To: "transform opacity-0 scale-95"
                                    -->
                                    <div
                                        class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200 focus:outline-none"
                                        role="menu" aria-orientation="vertical"
                                        aria-labelledby="project-options-menu-0-button"
                                        tabindex="-1" x-show="show">
                                        <div class="py-1" role="none">
                                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                            <a href="#" class="text-gray-700 group flex items-center px-4 py-2 text-sm"
                                               role="menuitem" tabindex="-1" id="project-options-menu-0-item-0">
                                                <!-- Heroicon name: solid/pencil-alt -->
                                                <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor"
                                                     aria-hidden="true">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                                                    <path fill-rule="evenodd"
                                                          d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Düzenle
                                            </a>
                                        </div>
                                        <div class="py-1" role="none">
                                            <a href="#" class="text-gray-700 group flex items-center px-4 py-2 text-sm"
                                               role="menuitem" tabindex="-1" id="project-options-menu-0-item-3">
                                                <!-- Heroicon name: solid/trash -->
                                                <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor"
                                                     aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                Sil
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <!-- More projects... -->
                    </tbody>
            </table>
            @endif
        </div>
        {{$news->links()}}
    </div>
</div>
