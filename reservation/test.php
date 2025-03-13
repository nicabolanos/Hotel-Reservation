<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celestial Cove</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=1200');">
    <nav class="text-white p-6 flex justify-between items-center">
        <h4 class="text-xl font-bold">Celestial Cove</h4>   
         <div>
            <a href="index.html" class="px-4 hover:underline">Home</a>
            <a href="about.html" class="px-4 hover:underline">About</a>
            <a href="signup.html" class="px-4 hover:underline">Sign Up</a>
            <a href="login.html" class="px-4 hover:underline bg-white text-black px-3 py-1 rounded-md">Login</a>
            <a href="reservation.html" class="px-4 hover:underline">Reservation</a>
        </div>
    </nav>

    <div class="container max-w-4xl px-8 py-12 ml-16">
        <div class="text-white text-left p-6">
            <h1 class="text-3xl font-bold">Enjoy a</h1>
            <h1 class="text-3xl font-bold text-gray-300">Relaxing Getaway</h1>
            <button class="mt-4 bg-blue-600 text-white px-6 py-2 rounded-full shadow-lg hover:bg-blue-700">Reserve Now!</button>
        </div>
    </div>
   <!-- <div class="mt-12 bg-white px-10 py-10 rounded-lg shadow-lg max-w-4xl mx-auto">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Search available Rooms</h2>
        <form class="space-y-4">
            <div class="flex flex-wrap gap-4">
                <div class="flex-1 min-w-[200px]">
                    <label class="block text-gray-700 font-medium">Check-in Date</label>
                    <input type="date" class="w-full border border-gray-300 p-2 rounded-lg">
                </div>
                <div class="flex-1 min-w-[200px]">
                    <label class="block text-gray-700 font-medium">Check-in Time</label>
                    <input type="time" class="w-full border border-gray-300 p-2 rounded-lg">
                </div>
                <div class="flex-1 min-w-[200px]">
                    <label class="block text-gray-700 font-medium">Check-out Date</label>
                    <input type="date" class="w-full border border-gray-300 p-2 rounded-lg">
                </div>
                <div class="flex-1 min-w-[200px]">
                    <label class="block text-gray-700 font-medium">Check-out Time</label>
                    <input type="time" class="w-full border border-gray-300 p-2 rounded-lg">
                </div>
            </div>
            <div class="flex flex-wrap gap-4">
                <div class="flex-1 min-w-[200px]">
                    <label class="block text-gray-700 font-medium">Room Type</label>
                    <select class="w-full border border-gray-300 p-2 rounded-lg">
                        <option>Standard Room</option>
                        <option>Double Room</option>
                        <option>Deluxe Room</option>
                        <option>Junior Suite</option>
                        <option>Presidential Suite</option>
                        <option>Family Room</option>        
                        <option>Executive Room</option>
                        <option>Villa</option>
                    </select>
                </div>
                <div class="flex-1 min-w-[200px]">
                    <label class="block text-gray-700 font-medium">No. of Adults</label>
                    <input type="number" class="w-full border border-gray-300 p-2 rounded-lg">
                </div>
                <div class="flex-1 min-w-[200px]">
                    <label class="block text-gray-700 font-medium">No. of Children</label>
                    <input type="number" class="w-full border border-gray-300 p-2 rounded-lg">
                </div>
                <div class="flex items-end w-full">
                    <button class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700">Search Now</button>
                </div>
            </div>
        </form>
    </div> -->
    <!--<div class="mt-12 bg-white px-10 py-10 rounded-lg shadow-lg max-w-4xl mx-auto">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Search available Rooms</h2>
        <form class="space-y-4">
            <div class="grid grid-cols-4 gap-4">
                <div>
                    <label class="block text-gray-700 font-medium">Check-in Date</label>
                    <input type="date" class="w-full border border-gray-300 p-2 rounded-lg">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Check-in Time</label>
                    <input type="time" class="w-full border border-gray-300 p-2 rounded-lg">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Check-out Date</label>
                    <input type="date" class="w-full border border-gray-300 p-2 rounded-lg">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Check-out Time</label>
                    <input type="time" class="w-full border border-gray-300 p-2 rounded-lg">
                </div>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <div>
                    <label class="block text-gray-700 font-medium">Room Type</label>
                    <select class="w-full border border-gray-300 p-2 rounded-lg">
                        <option>Standard Room</option>
                        <option>Double Room</option>
                        <option>Deluxe Room</option>
                        <option>Junior Suite</option>
                        <option>Presidential Suite</option>
                        <option>Family Room</option>        
                        <option>Executive Room</option>
                        <option>Villa</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">No. of Adults</label>
                    <input type="number" class="w-full border border-gray-300 p-2 rounded-lg">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">No. of Children</label>
                    <input type="number" class="w-full border border-gray-300 p-2 rounded-lg">
                </div>
                <div class="flex items-end">
                    <button class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700">Search Now</button>
                </div>
            </div>
        </form>
    </div> -->
    <div class="mt-12 bg-white px-10 py-10 rounded-lg shadow-lg max-w-4xl mx-auto">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Search available Rooms</h2>
        <form class="space-y-4">
            <div class="grid grid-cols-4 gap-4">
                <input type="date" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Check-in Date">
                <input type="time" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Check-in Time">
                <input type="date" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Check-out Date">
                <input type="time" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Check-out Time">
            </div>
            <div class="grid grid-cols-4 gap-4">
                <select class="w-full border border-gray-300 p-2 rounded-lg">
                    <option>Standard Room</option>
                    <option>Double Room</option>
                    <option>Deluxe Room</option>
                    <option>Junior Suite</option>
                    <option>Presidential Suite</option>
                    <option>Family Room</option>        
                    <option>Executive Room</option>
                    <option>Villa</option>
                </select>
                <input type="number" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="No. of Adults">
                <input type="number" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="No. of Children">
                <div class="flex items-end">
                    <button class="w-full bg-blue-600 text-white p-4 rounded-lg text-lg hover:bg-blue-700">Search Now</button>
                </div>
            </div>
        </form>
    </div>
      <div class="mt-12 flex justify-center gap-6">
        <div class="relative bg-white rounded-lg shadow-lg overflow-hidden max-w-xs">
            <div class="absolute top-2 left-2 bg-green-500 text-white text-sm px-3 py-1 rounded">SEASON DISCOUNT! 20%</div>
            <img src= "standard.jpg" alt="Standard Room" class="w-full">
            <div class="p-4">
                <h3 class="font-bold">Standard Room</h3>
                <p class="text-blue-600 font-semibold">P 50,000</p>
                <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg w-full hover:bg-blue-700">Reserve now</button>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-xs">
            <img src="double.jpg" alt="Double Room" class="w-full">
            <div class="p-4">
                <h3 class="font-bold">Double Room</h3>
                <p class="text-blue-600 font-semibold">P 60,000</p>
                <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg w-full hover:bg-blue-700">Reserve now</button>
            </div> 
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-xs">
            <img src="deluxe.jpg" alt="Deluxe Room" class="w-full">
            <div class="p-4">
                <h3 class="font-bold">Deluxe Room</h3>
                <p class="text-blue-600 font-semibold">P 70,000</p>
                <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg w-full hover:bg-blue-700">Reserve now</button>
            </div> 
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-xs">
            <img src="junior.jpg" alt="Junior Suite" class="w-full">
            <div class="p-4">
                <h3 class="font-bold">Junior Suite</h3>
                <p class="text-blue-600 font-semibold">P 80,000</p>
                <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg w-full hover:bg-blue-700">Reserve now</button>
            </div>
        </div>   
        
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-xs">
            <img src="presidential.jpg" alt="Presidential Suite" class="w-full">
            <div class="p-4">
                <h3 class="font-bold">Presidential Suite</h3>
                <p class="text-blue-600 font-semibold">P 90,000</p>
                <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg w-full hover:bg-blue-700">Reserve now</button>
            </div>
        </div> 

        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-xs">
            <img src="family.jpg" alt="Family Room" class="w-full">
            <div class="p-4">
                <h3 class="font-bold">Family Room</h3>
                <p class="text-blue-600 font-semibold">P 100,000</p>
                <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg w-full hover:bg-blue-700">Reserve now</button>
            </div>
        </div> 
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-xs">
            <img src="executive.jpg" alt="Executive Room" class="w-full">
            <div class="p-4">
                <h3 class="font-bold">Executive Room</h3>
                <p class="text-blue-600 font-semibold">P 120,000</p>
                <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg w-full hover:bg-blue-700">Reserve now</button>
            </div>
        </div> 

        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-xs">
            <img src="villa.jpg" alt="Villa" class="w-full">
            <div class="p-4">
                <h3 class="font-bold">Villa</h3>
                <p class="text-blue-600 font-semibold">P 150,000</p>
                <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg w-full hover:bg-blue-700">Reserve now</button>
            </div>
        </div> 

    </div>

   <!-- <div class="mt-12 bg-white px-10 py-10 rounded-lg shadow-lg max-w-4xl mx-auto relative z-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Room Previews</h2>
        <div class="relative overflow-hidden cursor-[url('custom-cursor.png'),_pointer]">

            <div class="flex space-x-4 overflow-x-auto snap-x" id="room-preview-container">
                <img src="standard.jpg" class="w-48 h-32 rounded-lg shadow-md snap-center" alt="Room 1" onclick=""openModal(this.src)">
                <img src="double.jpg" class="w-48 h-32 rounded-lg shadow-md snap-center" alt="Room 2" onclick=""openModal(this.src)">
                <img src="deluxe.jpg" class="w-48 h-32 rounded-lg shadow-md snap-center" alt="Room 3" onclick=""openModal(this.src)">
                <img src="junior.jpg" class="w-48 h-32 rounded-lg shadow-md snap-center" alt="Room 4" onclick=""openModal(this.src)">
                <img src="presidential.jpg" class="w-48 h-32 rounded-lg shadow-md snap-center" alt="Room 5" onclick=""openModal(this.src)">
                <img src="family.jpg" class="w-48 h-32 rounded-lg shadow-md snap-center" alt="Room 6" onclick=""openModal(this.src)">
                <img src="executive.jpg" class="w-48 h-32 rounded-lg shadow-md snap-center" alt="Room 7" onclick=""openModal(this.src)">
                <img src="villa.jpg" class="w-48 h-32 rounded-lg shadow-md snap-center" alt="Room 8" onclick=""openModal(this.src)">
            </div>
            <button onclick="prevRoom()" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">❮</button>
            <button onclick="nextRoom()" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">❯</button>
        </div>
    </div>

    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
        <div class="relative">
            <img id="modalImage" class="max-w-full max-h-full rounded-lg shadow-lg">
            <button onclick="closeModal()" class="absolute top-2 right-2 bg-white text-black p-2 rounded-full">✕</button>
        </div>
    </div> -->

   <script>
        function nextRoom() {
            document.getElementById('room-preview-container').scrollBy({ left: 200, behavior: 'smooth' });
        }
        function prevRoom() {
            document.getElementById('room-preview-container').scrollBy({ left: -200, behavior: 'smooth' });
        }
        function openModal(src) {
            const modal = document .getElementById('imageModal');
            document.getElementById('modalImage').src = src;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
        function closeModal() {
            const modal = document.getElementById('imageModal
            modal.classList.add('hidden');  
            modal.classList.remove('flex');
        }
    </script>

</body>
</html>