<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Goldy</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/index.css')

</head>

<body class="bg-orange-100 poppins">
    <div class="container ">
        <div class="flex items-center justify-between my-12 ">
            <div class="left hidden md:flex flex-col w-[50%] justify-center items-center mx-8">
                <div class="image">
                    <img src="/assets/Images/images.jpg" class="w-[600px] rounded-xl" alt="image de personne connecter">
                </div>
                <div class="text-lg mt-8 text-center w-[500px] text-gray-400 font-bold">
                    Connectez-vous, partagez, et découvrez le monde à votre manière avec <span class="text-yellow-400">Goldy</span>
                </div>
            </div>
            <div class="right  mx-auto md:flex md:justify-center md:w-[50%]">
                <div class="form-container flex flex-col items-center justify-center shadow-lg md:w-[400px] h-[400px]">
                    <div class="titre"><img src="/assets/Logo/Goldy logo.png"
                            class="rounded-full w-[100px] bg-yellow-400" alt="Goldy logo">
                    </div>
                    <div class="form-form">
                        <form action="POST">
                            <div class="form-input px-2">
                                <input type="email" class="border-2 rounded-md p-2 my-3 w-full" name="email" id="email"
                                    placeholder="Email">
                                <input type="password" name="passwd" class="border-2 rounded-md p-1 w-full" id="passwd"
                                    placeholder="Mot de passe">
                            </div>
                            <div class="form-submit flex justify-center p-5">
                                <button type="submit"
                                    class="border-2 border-white text-white bg-red-400 p-3 rounded-full">Se
                                    connecter</button>
                            </div>
                            <div class="form-footer text-sm text-center text-gray-400">
                                Vous n'avez pas encore de compte? <a href="#" class="text-indigo-400">Ici</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>
</body>

</html>