<aside
        class="block xl:block sm:hidden sidebar-wrapper w-[256px] fixed top-0 dark:bg-darkblack-600 h-full z-30" style="border-top-right-radius: 30px;background: rgb(47,67,141);
        background: linear-gradient(3deg, rgba(47,67,141,1) 0%, rgba(89,109,183,1) 35%, rgba(47,67,141,1) 100%);">
        <div
          class="sidebar-header relative  w-full h-[108px] flex items-center pl-[50px] z-30">
          <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('assets/images/logo-white.svg') }}" class="block dark:hidden" alt="logo" />
            <img src="{{ asset('assets/images/logo-white.svg') }}" class="hidden dark:block " alt="logo" />
          </a>
          <button type="button" class="drawer-btn absolute right-0 top-auto rounded-full p-3 ml-5 border border-1 border-[#B86E9F]" title="Ctrl+b">
            <span>
              <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.8">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.0524 6.0009L6.5502 1.46527C6.88311 1.12914 6.88311 0.587019 6.5502 0.250891C6.39158 0.0903187 6.17521 9.26364e-07 5.94954 9.165e-07C5.72387 9.06636e-07 5.5075 0.0903186 5.34887 0.250891L0.250407 5.39281C-0.0835545 5.72857 -0.0835545 6.27143 0.250407 6.60719L5.34866 11.7491C5.5075 11.9097 5.72387 12 5.94954 12C6.17521 12 6.39158 11.9097 6.55042 11.7491C6.88311 11.4129 6.88311 10.8708 6.54999 10.5347L2.0524 6.0009Z" fill="url(#paint0_radial_57_310)"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.0524 6.0009L6.5502 1.46527C6.88311 1.12914 6.88311 0.587019 6.5502 0.250891C6.39158 0.0903187 6.17521 9.26364e-07 5.94954 9.165e-07C5.72387 9.06636e-07 5.5075 0.0903186 5.34887 0.250891L0.250407 5.39281C-0.0835545 5.72857 -0.0835545 6.27143 0.250407 6.60719L5.34866 11.7491C5.5075 11.9097 5.72387 12 5.94954 12C6.17521 12 6.39158 11.9097 6.55042 11.7491C6.88311 11.4129 6.88311 10.8708 6.54999 10.5347L2.0524 6.0009Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.0524 6.0009L6.5502 1.46527C6.88311 1.12914 6.88311 0.587019 6.5502 0.250891C6.39158 0.0903187 6.17521 9.26364e-07 5.94954 9.165e-07C5.72387 9.06636e-07 5.5075 0.0903186 5.34887 0.250891L0.250407 5.39281C-0.0835545 5.72857 -0.0835545 6.27143 0.250407 6.60719L5.34866 11.7491C5.5075 11.9097 5.72387 12 5.94954 12C6.17521 12 6.39158 11.9097 6.55042 11.7491C6.88311 11.4129 6.88311 10.8708 6.54999 10.5347L2.0524 6.0009Z" fill="white" fill-opacity="0.24" style="mix-blend-mode:overlay"/>
                </g>
                <defs>
                <radialGradient id="paint0_radial_57_310" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(3.39999 6) rotate(-180) scale(3.4 6)">
                <stop stop-color="#CC8B8B"/>
                <stop offset="1" stop-color="#A33B3B"/>
                </radialGradient>
                </defs>
                </svg>
                
            </span>
          </button>
        </div>
        <div
          class="sidebar-body pl-[48px] pt-[14px] w-full relative z-30 h-screen overflow-style-none  pb-[200px]" >
          <div class="nav-wrapper pr-[50px] mb-[36px]">
            <div class="item-wrapper mb-5">
              <div class="sidebar-header relative flex w-full h-[108px] items-center pl-[5px] z-30">
                <a href="#">
                  <img src="{{ asset('assets/images/profile-52x52.png') }}" class="rounded-full ring-2 ring-white" alt="logo" />
                </a>
                <div class="ml-3">
                  <h1 class="text-white font-bold">Admin</h1>
                  <p class="text-[12px] font-bold text-white">Damien Rourke</p>
                </div>
           
              </div>
              <h4
                class="text-sm font-medium text-gray-700  leading-7">
                Menu
              </h4>
              <ul class="mt-2.5">
                <li class="item py-[11px] text-bgray-900 dark:text-white">
                  <a href="index.html">
                    <div class="flex items-center justify-between">
                      <div class="flex space-x-2.5 items-center">
                        <span class="item-ico">
                          <i class="fa-duotone fa-briefcase fa-2x text-white"></i>
                        </span>
                        <span class="item-text text-white text-lg font-medium leading-none">Dashboard</span>
                      </div>
                      <span>
                        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.0009 2.05246L1.46527 6.55026C1.12914 6.88317 0.587019 6.88317 0.250891 6.55026C0.0903187 6.39164 9.53674e-07 6.17527 9.53674e-07 5.9496C9.53674e-07 5.72393 0.0903187 5.50756 0.250891 5.34893L5.39281 0.250468C5.72857 -0.0834937 6.27143 -0.0834937 6.60719 0.250468L11.7491 5.34872C11.9097 5.50756 12 5.72393 12 5.9496C12 6.17527 11.9097 6.39164 11.7491 6.55048C11.4129 6.88317 10.8708 6.88317 10.5347 6.55005L6.0009 2.05246Z" fill="white" fill-opacity="0.32"/>
                          </svg>
                          
                      </span>
                    </div>
                  </a>
                  <ul class="sub-menu mt-[22px] ml-2.5 pl-5 border-l border-success-100">
                    <li>
                      <a href="index.html"
                        class="text-md font-medium text-bgray-600 dark:text-bgray-50 hover:dark:text-success-300 transition-all py-1.5 inline-block hover:text-bgray-800">Ai Assitant</a>
                    </li>
                    <li>
                      <a href="index-2.html"
                        class="text-md font-medium text-bgray-600 dark:text-bgray-50 hover:dark:text-success-300 transition-all py-1.5 inline-block hover:text-bgray-800">Reviews</a>
                    </li>
                    <li>
                      <a href="statistics.html"
                        class="text-md font-medium text-bgray-600 dark:text-bgray-50 hover:dark:text-success-300 transition-all py-1.5 inline-block hover:text-bgray-800">Customization</a>
                    </li>
                  
                  </ul>
                </li>
                <li class="item py-[11px] text-bgray-900 dark:text-white">
                  <a href="transaction.html">
                    <div class="flex items-center justify-between">
                      <div class="flex space-x-2.5 items-center">
                        <span class="item-ico">
                          <i class="fa-light fa-file-lines text-white fa-2x" ></i>
                        </span>
                        <span class="item-text text-lg font-medium leading-none text-white">Pages</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="item py-[11px] text-bgray-900 dark:text-white">
                  <a href="statistics.html">
                    <div class="flex items-center justify-between">
                      <div class="flex space-x-2.5 items-center">
                        <span class="item-ico">
                          <i class="fa-duotone fa-wallet fa-2x text-white"></i>
                        </span>
                        <span class="item-text text-lg font-medium leading-none text-white">Subscriptions</span>
                      </div>
                    </div>
                  </a>
                </li>
              
               
              </ul>
            </div>
     
          </div>
          <div class="upgrade-wrapper w-full h-[250px] pr-[24px] mb-[26px] rounded-2xl">
            <div class="w-full h-full upgrade-banner relative border-solid rounded-lg">
              
              <h1 class="font-bold text-white text-xl text-center pt-8 mb-2">
                Add Prompt
              </h1>
              <p class="text-sm leading-5 text-white opacity-[0.8] text-center px-4 mb-2">
                Enhance engagement with a click. Boost creativity instantly!
              </p>
              <div class="flex justify-center">
                <a href="#">
                  <div
                    class="flex justify-center bg-[#E0822D] hover:bg-[#E0822D] transition ease-in-out duration-300 w-[134px] h-[36px] rounded-lg">
                    <div class="flex space-x-1.5 items-center">
                      <span class="text-sm font-semibold text-white "><i class="fa-sharp fa-solid fa-plus text-white"></i> Create Prompt</span>
                    
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
         
        </div>
      </aside>
      <div style="z-index: 25;" 
        class="aside-overlay block sm:hidden w-full h-full fixed left-0 top-0 bg-black bg-opacity-30  "></div>
      <aside class="sm:block hidden  fixed top-0 relative w-[167px] dark:bg-black  overflow-y-hidden	" style="border-top-right-radius: 30px;background: rgb(47,67,141);
      background: linear-gradient(3deg, rgba(47,67,141,1) 0%, rgba(89,109,183,1) 35%, rgba(47,67,141,1) 100%);">
        <div class="w-full sidebar-wrapper-collapse relative top-0 z-30" >
          <div class="sidebar-header sticky top-0  w-full h-[108px] flex items-center justify-center z-20  " >
              <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('assets/images/logo-short-white.svg') }}" class="dark:hidden block" alt="logo" />
                <img src="{{ asset('assets/images/logo-short-white.svg') }}" class="hidden dark:block" alt="logo" />
              </a>
            </div>
            <div class="sidebar-header  top-5  w-full h-[108px] flex items-center justify-center z-20  " >
              <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('assets/images/user-1.png') }}" class="rounded-full ring-2 ring-white" alt="logo" />
                
              </a>
            </div>
          
          <div class="sidebar-body pt-[14px] w-full ">
            <div class="flex flex-col items-center">
              <div class="nav-wrapper mb-[36px]">
                <div class="item-wrapper mb-5">
                  <ul class="mt-2.5 flex justify-center items-center flex-col">
                    <li class="item py-[11px] px-[43px]">
                      <a href="#">
                        <span class="item-ico">
                          <i class="fa-duotone fa-briefcase fa-2x text-white"></i>
                        </span>
                      </a>
                      <ul
                        class="sub-menu border-l border-success-100 bg-[#304282] px-5 py-2 ml-5 rounded-lg shadow-lg min-w-[200px]" style="z-index: -1px;">
                        <li>
                          <a href="index-2.html"
                            class="text-md font-medium text-bgray-600 py-1.5 inline-block hover:text-bgray-800">AI Assistant</a>
                        </li>
                        <li>
                          <a href="messages.html"
                            class="text-md font-medium text-bgray-600 py-1.5 inline-block hover:text-bgray-800">Reviews</a>
                        </li>
                        <li>
                          <a href="integrations.html"
                            class="text-md font-medium text-bgray-600 py-1.5 inline-block hover:text-bgray-800">Customizations</a>
                        </li>
                      </ul>
                    </li>
                    <li class="item py-[11px] px-[43px]">
                      <a href="transaction.html">
                        <span class="item-ico">
                          <i class="fa-light fa-file-lines text-white fa-2x" ></i>
                        </span>
                      </a>
                    </li>
                    <li class="item py-[11px] px-[43px]">
                      <a href="statistics.html">
                        <span class="item-ico">
                          <i class="fa-duotone fa-wallet fa-2x text-white"></i>
                        </span>
                      </a>
                    
                    </li>
               
                  </ul>
                </div>
                
              </div>
              <div class="upgrade-wrapper">
                <div class="w-10 flex justify-center items-center h-10 rounded-full bg-[#2F438D] ">
                  <span>
                    <i class="fa-solid fa-rectangle-terminal fa-2x text-white"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>