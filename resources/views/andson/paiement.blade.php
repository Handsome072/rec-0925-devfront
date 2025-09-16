<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test psychotechnique pour permis de conduire à Montgeron</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/paiement.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Header -->
    <header class="header-custom">
        <img src="{{ asset('images/logo.png') }}" alt="AAAEP - Centre National des Tests Psychotechniques">
    </header>

    <!-- Title Container with Rectangle -->
    <div class="title-container">
        <h1 class="title-main">
            Test psychotechnique pour permis de conduire à Montgeron
        </h1>
    </div>

    <!-- Main Content -->
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          
            <!-- Section principale - Confirmer et payer -->
            <div class="lg:col-span-2 space-y-8">
            
                <!-- Alerte -->
                <div class="bg-white rounded-lg p-6 shadow-sm border">
                    <h1 class="text-2xl mb-6">Confirmer et payer</h1>
                    
                    <div class="flex items-start space-x-3 p-4 bg-orange-50 border border-orange-200 rounded-lg">
                        <svg class="h-5 w-5 text-orange-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <div>
                            <div class="text-sm text-gray-700">
                                <strong>Date de réservation en forte demande</strong>
                            </div>
                            <div class="text-sm text-gray-600">
                                Les réservations sont fréquentes pour ce centre
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informations personnelles -->
                <div class="bg-white rounded-lg p-6 shadow-sm border">
                    <h2 class="text-xl mb-6">Vos informations personnelles</h2>
                    
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom Prénom</label>
                            <input id="name" type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input id="email" type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Numéro de téléphone</label>
                            <input id="phone" type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Informations du test -->
                <div class="bg-white rounded-lg p-6 shadow-sm border">
                    <h2 class="text-xl mb-6">Votre test psychotechnique</h2>
                    
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <div>
                                <div class="text-sm text-gray-500">Date</div>
                                <div>12 mai 2025</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <div class="text-sm text-gray-500">Horaire</div>
                                <div>12:30</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                <div class="text-sm text-gray-500">Adresse</div>
                                <div>39 Rue Emile Steiner, 27200 Vernon</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Moyens de paiement -->
                <div class="bg-white rounded-lg p-6 shadow-sm border">
                    <div class="flex items-center space-x-2 mb-6">
                        <h2 class="text-xl">Choisissez votre moyen de paiement</h2>
                        <div class="flex items-center space-x-1 text-sm text-gray-600">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span>100% SÉCURISÉ</span>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <label class="flex items-center space-x-3 p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment" value="card" class="text-blue-600" checked>
                            <div class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                                <span>Carte bancaire</span>
                            </div>
                        </label>
                        
                        <label class="flex items-center space-x-3 p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment" value="applepay" class="text-blue-600">
                            <div class="flex items-center space-x-2">
                                <div class="h-5 w-5 bg-black rounded text-white flex items-center justify-center text-xs">
                                    📱
                                </div>
                                <span>Apple Pay</span>
                            </div>
                        </label>
                        
                        <label class="flex items-center space-x-3 p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment" value="paypal" class="text-blue-600">
                            <div class="flex items-center space-x-2">
                                <div class="h-5 w-8 bg-blue-600 rounded text-white flex items-center justify-center text-xs font-bold">
                                    PP
                                </div>
                                <span>Paypal</span>
                            </div>
                        </label>
                        
                        <label class="flex items-center space-x-3 p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment" value="alma" class="text-blue-600">
                            <div class="flex items-center space-x-2">
                                <div class="h-5 w-8 bg-teal-600 rounded text-white flex items-center justify-center text-xs font-bold">
                                    AL
                                </div>
                                <span>Alma</span>
                            </div>
                        </label>
                    </div>
                    
                    <button class="w-full mt-6 bg-pink-600 hover:bg-pink-700 text-white py-3 px-4 rounded-lg font-medium transition-colors">
                        Je réserve mon test psychotechnique →
                    </button>
                </div>
            </div>

            <!-- Sidebar - Récapitulatif -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg p-6 shadow-sm border sticky top-8">
                    <h2 class="text-xl text-pink-600 mb-4">Récapitulatif de votre test psychotechnique</h2>
                    
                    <div class="mb-6">
                        <div class="text-lg">
                            Total à payer : <strong>130.00€</strong>
                        </div>
                    </div>
                    
                    <div class="text-sm text-gray-600 mb-6 leading-relaxed">
                        En passant votre commande, vous acceptez les conditions générales 
                        de vente de la société AAAEP. Veuillez consulter notre politique de 
                        protection des données.
                    </div>
                    
                    <!-- Étapes avec icônes en grille -->
                    <div class="grid grid-cols-3 gap-3">
                        <div class="bg-gray-100 rounded-lg p-3 text-center">
                            <div class="flex justify-center mb-2">
                                <div class="bg-green-100 rounded-full p-2">
                                    <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-xs">Entraînement</div>
                            <div class="text-xs">Gratuit Illimité</div>
                        </div>
                        
                        <div class="bg-gray-100 rounded-lg p-3 text-center">
                            <div class="flex justify-center mb-2">
                                <div class="bg-green-100 rounded-full p-2">
                                    <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-xs">Résultats</div>
                            <div class="text-xs">le Jour Même</div>
                        </div>
                        
                        <div class="bg-gray-100 rounded-lg p-3 text-center">
                            <div class="flex justify-center mb-2">
                                <div class="bg-green-100 rounded-full p-2">
                                    <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-xs">Annulation</div>
                            <div class="text-xs">Gratuite jusqu'à 48h</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
