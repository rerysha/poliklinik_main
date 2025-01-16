<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Udinus Poliklinik</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="font-sans antialiased">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo -->
            <a href="index.html" class="text-2xl font-bold text-blue-500 flex items-center">
                <i class="fas fa-shield-heart mr-2"></i> Poliklinik Udinus
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="relative bg-blue-50">
        <div class="container mx-auto flex flex-col-reverse md:flex-row items-center py-16 px-6">
            <!-- Text Content -->
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Selamat Datang Di Poliklinik Udinus</h1>
                <p class="text-gray-600 mb-6">Kesehatan itu mahal, Tetapi sakit lebih mahal lagi. Berobat? Ke Poliklinik Udinus Aja!</p>
            </div>

            <!-- Image Content -->
            <div class="md:w-1/2 flex justify-center">
                <img src="assets/images/doctors.jpg" alt="Doctors" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>

    <!-- Login Cards -->
    <div class="container mx-auto mt-10">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Pasien Card -->
            <div class="bg-gradient-to-tr from-blue-500 to-blue-400 text-white shadow-lg rounded-lg p-8 flex flex-col items-center text-center transform transition hover:scale-105 hover:shadow-2xl">
                <div class="bg-white text-blue-500 rounded-full p-4 mb-4">
                    <i class="fas fa-hospital-user text-4xl"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-2">Pasien</h3>
                <p class="text-white text-opacity-80 mb-4">Dapatkan layanan kesehatan terbaik. Login sekarang untuk memulai!</p>
                <a href="loginUser.php" class="bg-white text-blue-500 font-bold px-6 py-3 rounded-full shadow-md hover:shadow-xl hover:text-blue-600">Masuk</a>
            </div>
            <!-- Dokter Card -->
            <div class="bg-gradient-to-tr from-green-500 to-green-400 text-white shadow-lg rounded-lg p-8 flex flex-col items-center text-center transform transition hover:scale-105 hover:shadow-2xl">
                <div class="bg-white text-green-500 rounded-full p-4 mb-4">
                    <i class="fas fa-stethoscope text-4xl"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-2">Dokter</h3>
                <p class="text-white text-opacity-80 mb-4">Mulai melayani pasien di Poliklinik Udinus. Login sekarang!</p>
                <a href="login.php" class="bg-white text-green-500 font-bold px-6 py-3 rounded-full shadow-md hover:shadow-xl hover:text-green-600">Masuk</a>
            </div>
        </div>
    </div>

    <!-- Testimonial Section -->
    <section class="bg-gradient-to-br from-gray-100 via-gray-200 to-white py-10">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Apa Kata Mereka?</h2>
                <p class="text-gray-600">Testimoni nyata dari pasien kami</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white shadow-lg rounded-lg p-6 transform transition hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-4">
                        <img src="assets/images/danyap.png" alt="Client 1" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h6 class="font-bold text-lg">Hanep jr</h6>
                            <p class="text-gray-500 text-sm">Semarang</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Ternyata berobat disini itu menyenangkan!"</p>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6 transform transition hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-4">
                        <img src="assets/images/danyap.png" alt="Client 2" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h6 class="font-bold text-lg">Hanep jr</h6>
                            <p class="text-gray-500 text-sm">Semarang</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Saya erobat kesini karna kakak saya, dan saya suka!"</p>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6 transform transition hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-4">
                        <img src="assets/images/danyap.png" alt="Client 3" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h6 class="font-bold text-lg">Hanep jr</h6>
                            <p class="text-gray-500 text-sm">Semarang</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Saya dan kakak saya sering sekali berobat disini, beneran mantap!"</p>
                </div>
                <!-- Testimonial 4 -->
                <div class="bg-white shadow-lg rounded-lg p-6 transform transition hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-4">
                        <img src="assets/images/hanep.png" alt="Client 1" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h6 class="font-bold text-lg">Hanep</h6>
                            <p class="text-gray-500 text-sm">Semarang</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Yang belum pernah berobat disini, wajib cobain sih!"</p>
                </div>
                <!-- Testimonial 5 -->
                <div class="bg-white shadow-lg rounded-lg p-6 transform transition hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-4">
                        <img src="assets/images/hanep.png" alt="Client 1" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h6 class="font-bold text-lg">Hanep</h6>
                            <p class="text-gray-500 text-sm">Semarang</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Sangat sangat recommended!"</p>
                </div>
                <!-- Testimonial 6 -->
                <div class="bg-white shadow-lg rounded-lg p-6 transform transition hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-4">
                        <img src="assets/images/hanep.png" alt="Client 1" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h6 class="font-bold text-lg">Hanep</h6>
                            <p class="text-gray-500 text-sm">Semarang</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Aku suka sekali berobat disini!"</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
