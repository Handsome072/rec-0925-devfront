<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test psychotechnique pour permis de conduire à Montgeron</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center">
                <!-- Logo AAAEP -->
                <div class="flex items-center">
                    <div class="w-12 h-12 relative mr-3">
                        <!-- Logo avec cercle rouge et bleu -->
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center relative">
                            <div class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full"></div>
                            <span class="text-white font-bold text-lg">A</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-sm font-semibold text-gray-900">AAAEP</div>
                        <div class="text-xs text-gray-600">CENTRE NATIONAL</div>
                        <div class="text-xs text-gray-600">DES TESTS PSYCHOTECHNIQUES</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Title -->
        <div class="mb-8">
            <h1 class="text-2xl font-semibold text-blue-700 mb-2">
                Test psychotechnique pour permis de conduire à Montgeron
            </h1>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Content -->
            <div class="flex-1 lg:w-2/3">
                <!-- Confirmer et payer Section -->
                <div class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6">
                        Confirmer et payer
                    </h2>

                    <!-- Alert -->
                    <div class="bg-orange-50 border-l-4 border-orange-400 p-4 mb-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-orange-700">
                                    <span class="font-medium">Date de réservation en forte demande</span><br>
                                    Les réservations sont fréquentes pour ce centre
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Test Info -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Votre test psychotechnique</h3>

                    <div class="space-y-4">
                        <!-- Date -->
                        <div class="flex items-center">
                            <div class="w-5 h-5 mr-3 flex-shrink-0">
                                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-medium text-gray-800">Date</div>
                                <div class="text-gray-600">12 mai 2025</div>
                            </div>
                        </div>

                        <!-- Horaire -->
                        <div class="flex items-center">
                            <div class="w-5 h-5 mr-3 flex-shrink-0">
                                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-medium text-gray-800">Horaire</div>
                                <div class="text-gray-600">12:30</div>
                            </div>
                        </div>

                        <!-- Adresse -->
                        <div class="flex items-center">
                            <div class="w-5 h-5 mr-3 flex-shrink-0">
                                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-medium text-gray-800">Adresse</div>
                                <div class="text-gray-600">39 Rue Emile Steiner, 27200 Vernon</div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-8 border-gray-200">

                <!-- Payment Method Selection -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Choisissez votre moyen de paiement</h3>
                    <div class="flex items-center mb-6">
                        <svg class="w-4 h-4 text-gray-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-gray-600 font-medium">100% SÉCURISÉ</span>
                    </div>

                    <div class="space-y-4">
                        <!-- Carte bancaire -->
                        <label class="flex items-center p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment-method" value="card" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300" checked>
                            <div class="ml-4 flex items-center">
                                <div class="flex space-x-1 mr-3">
                                    <div class="w-8 h-5 bg-blue-600 rounded-sm flex items-center justify-center">
                                        <span class="text-white text-xs font-bold">V</span>
                                    </div>
                                    <div class="w-8 h-5 bg-red-500 rounded-sm flex items-center justify-center">
                                        <span class="text-white text-xs font-bold">M</span>
                                    </div>
                                </div>
                                <span class="text-gray-800 font-medium">Carte bancaire</span>
                            </div>
                        </label>

                        <!-- Apple Pay -->
                        <label class="flex items-center p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment-method" value="apple-pay" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                            <div class="ml-4 flex items-center">
                                <div class="w-8 h-5 bg-black rounded-sm flex items-center justify-center mr-3">
                                    <span class="text-white text-xs">🍎</span>
                                </div>
                                <span class="text-gray-800 font-medium">Apple Pay</span>
                            </div>
                        </label>

                        <!-- PayPal -->
                        <label class="flex items-center p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment-method" value="paypal" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                            <div class="ml-4 flex items-center">
                                <div class="w-8 h-5 bg-blue-600 rounded-sm flex items-center justify-center mr-3">
                                    <span class="text-white text-xs font-bold">P</span>
                                </div>
                                <span class="text-gray-800 font-medium">Paypal</span>
                            </div>
                        </label>

                        <!-- Alma -->
                        <label class="flex items-center p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment-method" value="alma" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                            <div class="ml-4 flex items-center">
                                <div class="w-8 h-5 bg-green-600 rounded-sm flex items-center justify-center mr-3">
                                    <span class="text-white text-xs font-bold">A</span>
                                </div>
                                <span class="text-gray-800 font-medium">Alma</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Personal Information Form -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Vos informations personnelles</h3>

                    <div class="space-y-4">
                        <div>
                            <input type="text" placeholder="Nom Prénom"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50">
                        </div>
                        <div>
                            <input type="email" placeholder="Email"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50">
                        </div>
                        <div>
                            <input type="tel" placeholder="Numéro de téléphone"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50">
                        </div>
                    </div>
                </div>

                <hr class="my-8 border-gray-200">

                <!-- Test Info Bottom -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Votre test psychotechnique</h3>
                </div>

                <!-- Reserve Button -->
                <button class="w-full bg-pink-600 hover:bg-pink-700 text-white py-4 px-6 rounded-lg font-semibold text-lg flex items-center justify-center transition-colors">
                    Je réserve mon test psychotechnique
                    <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>

            <!-- Right Sidebar - Sticky -->
            <div class="lg:w-1/3">
                <div class="sticky top-8">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-pink-600 mb-4">Récapitulatif de votre test psychotechnique</h3>

                        <div class="mb-6">
                            <div class="text-lg font-semibold text-gray-800 mb-2">
                                Total à payer : <span class="text-xl">130.00€</span>
                            </div>
                            <p class="text-sm text-gray-600">
                                En passant votre commande, vous acceptez les conditions générales de vente de la société AAAEP. Veuillez consulter notre politique de protection des données.
                            </p>
                        </div>

                        <!-- Features Icons -->
                        <div class="grid grid-cols-3 gap-4 mb-6">
                            <div class="text-center">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 2L3 7v11a1 1 0 001 1h3v-6h6v6h3a1 1 0 001-1V7l-7-5z"/>
                                    </svg>
                                </div>
                                <div class="text-xs text-gray-600">
                                    <div class="font-medium">Entraînement</div>
                                    <div>Gratuit illimité</div>
                                </div>
                            </div>

                            <div class="text-center">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div class="text-xs text-gray-600">
                                    <div class="font-medium">Résultats</div>
                                    <div>le Jour Même</div>
                                </div>
                            </div>

                            <div class="text-center">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="text-xs text-gray-600">
                                    <div class="font-medium">Annulation</div>
                                    <div>Gratuite jusqu'à 48h</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
