<x-full-layout>
  <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
    <div class="px-4 pt-6 flex items-center" id="mainDiv">
      <div class="grid gap-4 grid-cols-1 min-w-full">
        <!-- Main widget -->
        <div class="flex items-center justify-between p-4">
          <div class="flex items-center justify-between border-gray-200 dark:border-gray-700">

          </div>
          <h1 class="text-xl font-semibold">Hello, User. Good Afternoon!</h1>
        </div>
        <div id="divUploadFiles"
          class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
          <form id="uploadFilesForm" action="{{ route('files.create') }}" method="POST" enctype="multipart/form-data"
            onclick="handleClickUpload()">
            <div class="flex items-center justify-between mb-4">
              <div class="flex-shrink-0">

                <h3 class="text-2xl font-light text-gray-500 dark:text-gray-400">Convert your files here</h3>
              </div>
              <div
                class="flex items-center justify-end flex-1 text-base font-medium text-green-500 dark:text-green-400">
                12.5%
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
            </div>
            <div class="flex items-center justify-center py-2 my-6">
              <label for="dropzone-file"
                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                  <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                  </svg>
                  <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                      upload</span> or drag and drop</p>
                  <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
              </label>
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
          </form>
        </div>
        <div class="px-4 pt-6">
          <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <!-- Card header -->
            <div class="items-center justify-between lg:flex">
              <div class="mb-4 lg:mb-0">
                <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Files</h3>
                <span class="text-base font-normal text-gray-500 dark:text-gray-400">Select the file type(s) for conversion</span>
              </div>

            </div>
            <!-- Table -->
            <div class="flex flex-col mt-6">
              <div class="overflow-x-auto rounded-lg">
                <div class="inline-block min-w-full align-middle">
                  <div class="overflow-hidden shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                      <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                          <th scope="col"
                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                            File
                          </th>
                          <th scope="col"
                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                            Format
                          </th>
                          <th scope="col"
                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                            Status
                          </th>
                          <th scope="col"
                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                            Size
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white dark:bg-gray-800">
                        <tr>
                          <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            Arquivo_1
                          </td>
                          <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400 flex items-center">
                            <span class="mr-2">TO</span>
                            <label for="underline_select" class="sr-only">format</label>
                            <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected>...</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                          </td>
                          <td class="p-4 whitespace-nowrap">
                            <span
                              class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                              <span
                              class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-red-100 dark:border-red-400 dark:bg-gray-700 dark:text-red-400">Cancelled</span>
                              <span
                              class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-purple-100 dark:bg-gray-700 dark:border-purple-500 dark:text-purple-400">In
                              progress</span>
                              <span
                              class="bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-orange-100 dark:bg-gray-700 dark:border-orange-300 dark:text-orange-300">In
                              review</span>
                          </td>
                          <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                            850 KB
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card Footer -->
            <div class="flex items-center justify-between pt-3 sm:pt-6">
              <div>
                <button
                  class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                  type="button" data-dropdown-toggle="transactions-dropdown">Last 7 days <svg class="w-4 h-4 ml-2"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg></button>
                <!-- Dropdown menu -->
                <div
                  class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                  id="transactions-dropdown">
                  <div class="px-4 py-3" role="none">
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white" role="none">
                      Sep 16, 2021 - Sep 22, 2021
                    </p>
                  </div>
                  <ul class="py-1" role="none">
                    <li>
                      <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Yesterday</a>
                    </li>
                    <li>
                      <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Today</a>
                    </li>
                    <li>
                      <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Last 7 days</a>
                    </li>
                    <li>
                      <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Last 30 days</a>
                    </li>
                    <li>
                      <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Last 90 days</a>
                    </li>
                  </ul>
                  <div class="py-1" role="none">
                    <a href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                      role="menuitem">Custom...</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink-0">
                <a href="#"
                  class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                  Transactions Report
                  <svg class="w-4 h-4 ml-1 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @section('scripts')
    <script>
      const fileInput = $('#dropzone-file');
      const fileList = $('#fileList');
      const uploadForm = $('#uploadFilesForm');
      let selectedFiles = [];

      $('body').on('change', '#dropzone-file', function(event) {
        let files = event.target.files;

        if (files.length > 0) {

        }
      });
    </script>
  @endsection
</x-full-layout>
