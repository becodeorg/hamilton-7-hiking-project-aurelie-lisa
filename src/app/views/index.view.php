<style>
    .homepage {
        background-image: url('images/moutain-snow.jpg');
        width: 100%;
        height: 100%;
    }
    </style>

<h1 class="text-cyan-600"></h1>
<div class="homepage w-full h-screen ">
    <div class="w-full h-screen flex flex-col items-center justify-between bg-black bg-opacity-70 py-8">
        <div class="flex-1 flex flex-col items-center justify-center">

            <h1 class="text-4xl lg:text-5xl xl:text-6xl text-cyan-600 tracking-wider font-bold font-serif mt-12 text-center">Find your next hike!</h1>
            <div class=" flex flex-col items-center space-y-4 mt-24">
                <form class="w-full flex items-center">
                    <input type="search" name="search" id="default-search" class="w-72 p-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded-tl rounded-bl text-sm" placeholder="Search..." required>
                    <button type="submit" class="bg-cyan-600 hover:bg-cyan-600 py-2 px-6 text-white border border-cyan-600 rounded-tr rounded-br text-sm">
                        <svg aria-hidden="true" class="w-5 h-5 text-white dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                </form>
                    <div class=" flex flex-col items-center m-30">
                        <button type="button" class="  text-white bg-cyan-600 hover:bg-cyan-600 focus:ring-4 focus:outline-none focus:ring-cyan-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-cyan-600 dark:hover:bg-cyan-600 dark:focus:ring-cyan-600">
                            <a href="/allhike">All hikes</a>
                            <svg aria-hidden="true" class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
            </div>
            </div>
        </div>
    </div>










<!--
 <div class="w-full flex items-center justify-center">
            <ul class="flex items-center space-x-4">
                <li>
                    <a href="#" title="Facebook">
                        <svg class="w-6 lg:w-8 h-6 lg:h-8 hover:scale-110 transition duration-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 506.86 506.86"><defs><style>.cls-1{fill:#e2e8f0;}</style></defs><path class="cls-1" d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z"></path><path class="cls-2" d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z"></path></svg>
                    </a>
                </li>
                <li>
                    <a href="#" title="Twitter">
                        <svg class="w-6 lg:w-8 h-6 lg:h-8 hover:scale-110 transition duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><path d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm90493 110539c-6654 2976-13822 4953-21307 5835 7669-4593 13533-11870 16333-20535-7168 4239-15133 7348-23574 9011-6787-7211-16426-11694-27105-11694-20504 0-37104 16610-37104 37101 0 2893 320 5722 949 8450-30852-1564-58204-16333-76513-38806-3285 5666-5022 12109-5022 18661v4c0 12866 6532 24246 16500 30882-6083-180-11804-1876-16828-4626v464c0 17993 12789 33007 29783 36400-3113 845-6400 1313-9786 1313-2398 0-4709-247-7007-665 4746 14736 18448 25478 34673 25791-12722 9967-28700 15902-46120 15902-3006 0-5935-184-8860-534 16466 10565 35972 16684 56928 16684 68271 0 105636-56577 105636-105632 0-1630-36-3209-104-4806 7251-5187 13538-11733 18514-19185l17-17-3 2z" fill="#e2e8f0"></path></svg>
                    </a>
                </li>
                <li>
                    <a href="#" title="LinkedIn">
                        <svg class="w-6 lg:w-8 h-6 lg:h-8 hover:scale-110 transition duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><path d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm-18220 138885h28897v14814l418 1c4024-7220 13865-14814 28538-14814 30514-1 36157 18989 36157 43691v50320l-30136 1v-44607c0-10634-221-24322-15670-24322-15691 0-18096 11575-18096 23548v45382h-30109v-94013zm-20892-26114c0 8650-7020 15670-15670 15670s-15672-7020-15672-15670 7022-15670 15672-15670 15670 7020 15670 15670zm-31342 26114h31342v94013H96213v-94013z" fill="#e2e8f0"></path></svg>
                    </a>
                </li>
            </ul>
        </div>
-->