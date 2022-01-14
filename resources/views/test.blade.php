<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>test</title>
</head>
<body class="bg-gray-100">
    <div class=" mx-32 my-8 border px-6 py-6 bg-gray-50 rounded-lg shadow-sm">
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <h3 class="pl-2 text-lg font-bold text-gray-600">
                Groups
            </h3>
        </div>
        <div class=" grid grid-cols-12"> 
            <div class=" col-span-8">
                <h4 class=" text-gray-500">Name</h4>
            </div>
            <div class=" col-span-2">
                <h4 class=" text-gray-500">Last Active</h4>
            </div>
            <div class=" col-span-2">
                <h4 class=" text-gray-500">Membership</h4>
            </div>
        </div>
        <div class="border-t-2 border-gray-500"></div>
        <div class=" mt-4 grid grid-cols-12"> 
            <div class=" col-span-8">
                <a href="#" class=" text-blue-600 font-semibold text-lg">Mentership Best Practice</a>
                <p class="text-gray-500 font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae cum molestiae possimus sapiente accusamus labore? Optio alias eaque qui quam quae vel itaque incidunt, praesentium blanditiis, tempore iste voluptas id.</p>
                <div class="mt-2 flex items-center">
                    <h3 class="text-gray-700 font-semibold">Owner:</h3>
                    <h4 class=" text-blue-600">Dira MacCloud</h4>
                    <span class="text-gray-400 ">(PBS)</span>
                </div>
            </div>
            <div class=" col-span-2">
                <h4 class=" text-gray-600 font-semibold pt-10">11:04 AM</h4>
            </div>
            <div class=" pt-3 col-span-2">
                
                <div class="rounded-full px-2 py-1 bg-green-500 text-white text-center">Members</div>
                <div class="mt-1 fled items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" fill-current text-gray-400 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-gray-400 text-sm">LEAVE</span>
                </div>
            </div>
        </div>
        <div class="border-t mt-4 border-gray-300"></div>
        <div class=" mt-4 grid grid-cols-12"> 
            <div class=" col-span-8">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" fill-current text-gray-700 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                      </svg> 
                    <a href="#" class=" text-blue-600 font-semibold text-lg">Mentership Best Practice</a>
                </div>
                <p class="text-gray-500 font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae cum molestiae possimus sapiente accusamus labore? Optio alias eaque qui quam quae vel itaque incidunt, praesentium blanditiis, tempore iste voluptas id.</p>
                <div class="mt-2 flex items-center">
                    <h3 class="text-gray-700 font-semibold">Owner:</h3>
                    <h4 class=" text-blue-600">Dira MacCloud</h4>
                    <span class="text-gray-400 ">(PBS)</span>
                </div>
            </div>
            <div class=" col-span-2">
                <h4 class=" text-gray-600 font-semibold pt-10">last month</h4>
            </div>
            <div class=" pt-3 col-span-2">
                
                <div class="rounded-full px-2 py-1 bg-green-500 text-white text-center">Members</div>
                <div class="mt-1 fled items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" fill-current text-gray-400 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-gray-400 text-sm">LEAVE</span>
                </div>
            </div>
        </div>
        <div class="border-t mt-4 border-gray-300"></div>
        <div class=" mt-4 grid grid-cols-12"> 
            <div class=" col-span-8">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" fill-current text-gray-700 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                      </svg> 
                    <a href="#" class=" text-blue-600 font-semibold text-lg">Mentership Best Practice</a>
                </div>
                <p class="text-gray-500 font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae cum molestiae possimus sapiente accusamus labore? Optio alias eaque qui quam quae vel itaque incidunt, praesentium blanditiis, tempore iste voluptas id.</p>
                <div class="mt-2 flex items-center">
                    <h3 class="text-gray-700 font-semibold">Owner:</h3>
                    <h4 class=" text-blue-600">Dira MacCloud</h4>
                    <span class="text-gray-400 ">(PBS)</span>
                </div>
            </div>
            <div class=" col-span-2">
                <h4 class=" text-gray-600 font-semibold pt-10">4:09 PM</h4>
            </div>
            <div class=" pt-3 col-span-2">
                
                <div class="rounded-full px-2 py-1 bg-green-500 text-white text-center">Members</div>
                <div class="mt-1 fled items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" fill-current text-gray-400 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-gray-400 text-sm">LEAVE</span>
                </div>
            </div>
        </div>
        <div class="border-t mt-4 border-gray-300"></div>
        <div class=" mt-4 grid grid-cols-12"> 
            <div class=" col-span-8">
                <a href="#" class=" text-blue-600 font-semibold text-lg">Mentership Best Practice</a>
                <p class="text-gray-500 font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae cum molestiae possimus sapiente accusamus labore? Optio alias eaque qui quam quae vel itaque incidunt, praesentium blanditiis, tempore iste voluptas id.</p>
                <div class="mt-2 flex items-center">
                    <h3 class="text-gray-700 font-semibold">Owner:</h3>
                    <h4 class=" text-blue-600">Dira MacCloud</h4>
                    <span class="text-gray-400 ">(PBS)</span>
                </div>
            </div>
            <div class=" col-span-2">
                <h4 class=" text-gray-600 font-semibold pt-10">4 weeks ago</h4>
            </div>
            <div class=" pt-3 col-span-2">
                
                <div class="rounded-full px-2 py-1 bg-green-500 text-white text-center">Members</div>
                <div class="mt-1 fled items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" fill-current text-gray-400 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-gray-400 text-sm">LEAVE</span>
                </div>
            </div>
        </div>
        <div class="border-t mt-4 border-gray-300"></div>
        <div class=" mt-4 grid grid-cols-12"> 
            <div class=" col-span-8">
                <a href="#" class=" text-blue-600 font-semibold text-lg">PMDMC 2020 </a>
                <p class="text-gray-500 font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae cum molestiae possimus sapiente accusamus labore? Optio alias eaque qui quam quae vel itaque incidunt, praesentium blanditiis, tempore iste voluptas id.</p>
                <div class="mt-2 flex items-center">
                    <h3 class="text-gray-700 font-semibold">Owner:</h3>
                    <h4 class=" text-blue-600">Dira MacCloud</h4>
                    <span class="text-gray-400 ">(PBS)</span>
                </div>
            </div>
            <div class=" col-span-2">
                <h4 class=" text-gray-600 font-semibold pt-10">6 months ago</h4>
            </div>
            <div class=" pt-3 col-span-2">
                
                <div class="mt-1 fled items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" fill-current text-gray-400 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                      </svg>
                    <span class="text-gray-400 text-sm">JOIN</span>
                </div>
            </div>
        </div>
        <div class="border-t mt-4 border-gray-300"></div>
        <div class=" mt-4 grid grid-cols-12"> 
            <div class=" col-span-8">
                <a href="#" class=" text-blue-600 font-semibold text-lg">PMDMC 2019</a>
                <p class="text-gray-500 font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae cum molestiae possimus sapiente accusamus labore? Optio alias eaque qui quam quae vel itaque incidunt, praesentium blanditiis, tempore iste voluptas id.</p>
                <div class="mt-2 flex items-center">
                    <h3 class="text-gray-700 font-semibold">Owner:</h3>
                    <h4 class=" text-blue-600">Dira MacCloud</h4>
                    <span class="text-gray-400 ">(PBS)</span>
                </div>
            </div>
            <div class=" col-span-2">
                <h4 class=" text-gray-600 font-semibold pt-10">1 year ago</h4>
            </div>
            <div class=" pt-3 col-span-2">
                <div class="mt-1 fled items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-400 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                      </svg>
                    <span class="text-gray-400 text-sm">JOIN</span>
                </div>
            </div>
        </div>
        <div class="border-t mt-4 border-gray-300"></div>
    </div>
</body>
</html>