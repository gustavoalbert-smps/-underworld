<x-full-layout>
  <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
    <div class="px-4 pt-6 flex items-center" id="mainDiv">
      <div class="grid gap-4 grid-cols-1 min-w-full">
        <!-- Main widget -->
				<div class="flex items-center justify-between p-4">
					<div
            class="flex items-center justify-between border-gray-200 dark:border-gray-700">
            
          </div>
					<h1 class="text-xl font-semibold">Hello, User. Good Afternoon!</h1>
				</div>
        <div
          class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
          <div class="flex items-center justify-between mb-4">
            <div class="flex-shrink-0">

              <h3 class="text-2xl font-light text-gray-500 dark:text-gray-400">Convert your files here</h3>
            </div>
            <div class="flex items-center justify-end flex-1 text-base font-medium text-green-500 dark:text-green-400">
              12.5%
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
            </div>
          </div>
					<div class="flex items-center justify-center py-2 my-6">
						<button
							class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-primary-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Select files
							<svg class="w-3 h-3 ml-2" fill="currentColor" viewBox="0 0 20 20"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd"
									d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
									clip-rule="evenodd"></path>
							</svg>
						</button>
					</div>
          <!-- Card Footer -->
          <div
            class="flex items-center justify-center pt-3 mt-4 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
            <div class="flex-shrink-0">
              <p
                class="inline-flex items-center p-2 text-xs font-medium rounded-lg text-gray-400 sm:text-sm dark:text-primary-200">
                Drop the files here. Maximum size of 100MB.
              </p>
            </div>
          </div>
        </div>
        <!--Tabs widget -->
      </div>
    </div>
  </div>
</x-full-layout>
