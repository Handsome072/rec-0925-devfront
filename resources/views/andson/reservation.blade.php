<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test psychotechnique pour permis de conduire à Montgeron</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen pb-32">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center">
                <!-- Logo AAAEP -->
                <div class="flex items-center">
                    <div class="w-12 h-12 relative mr-3">
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
        <div class="mb-8">
            <h1 class="text-2xl font-semibold text-blue-600 mb-4">
                Test psychotechnique pour permis de conduire à Montgeron
            </h1>
            <h2 class="text-xl font-medium text-gray-800">
                Complétez votre réservation
            </h2>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Basic Card -->
            <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
                <div class="text-center mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Basic</h3>
                    <p class="text-sm text-gray-600">Votre test psychotechnique simple</p>
                </div>

                <div class="text-center mb-6">
                    <span class="text-4xl font-bold text-gray-800">+ 0€</span>
                </div>

                <div class="mb-6">
                    <button class="w-full bg-gray-100 text-gray-700 py-3 px-4 rounded-lg font-medium hover:bg-gray-200 transition-colors">
                        Sélectionner
                    </button>
                </div>

                <!-- Features -->
                <div class="space-y-3">
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2L3 7v11a1 1 0 001 1h3v-6h6v6h3a1 1 0 001-1V7l-7-5z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Entraînement illimité et gratuit</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Annulation jusqu'à 48 heures</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Recevez votre test le jour J</span>
                    </div>
                </div>
            </div>

            <!-- Assurance Card (Selected) -->
            <div class="bg-white rounded-lg border-4 border-green-500 p-6 shadow-lg relative">
                <div class="text-center mb-6">
                    <div class="bg-green-500 text-white py-2 px-4 rounded-lg mb-2 inline-block">
                        <h3 class="text-lg font-semibold">Assurance</h3>
                    </div>
                    <p class="text-sm text-gray-600">Votre test psychotechnique sans stress</p>
                </div>

                <div class="text-center mb-6">
                    <span class="text-4xl font-bold text-gray-800">+ 40€</span>
                    <p class="text-xs text-gray-600 mt-1">À peine le prix d'un resto</p>
                </div>

                <div class="mb-6">
                    <button class="w-full bg-green-500 text-white py-3 px-4 rounded-lg font-medium hover:bg-green-600 transition-colors flex items-center justify-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Sélectionner
                    </button>
                </div>

                <!-- Features -->
                <div class="space-y-3">
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2L3 7v11a1 1 0 001 1h3v-6h6v6h3a1 1 0 001-1V7l-7-5z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Entraînement illimité et gratuit</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Annulation jusqu'à 48 heures</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Repassez votre test pour 0€ (si test échoué)</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Recevez votre test le jour J</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M12 2l3.09 6.26L22 9l-5 4.87L18.18 22 12 18.27 5.82 22 7 13.87 2 9l6.91-.74L12 2z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Livret de préparation au test psychotechnique</span>
                    </div>
                </div>
            </div>

            <!-- Complet Card -->
            <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
                <div class="text-center mb-6">
                    <div class="bg-blue-600 text-white py-2 px-4 rounded-lg mb-2 inline-block">
                        <h3 class="text-lg font-semibold">Complet</h3>
                    </div>
                    <p class="text-sm text-gray-600">Votre test psychotechnique tout compris</p>
                </div>

                <div class="text-center mb-6">
                    <span class="text-4xl font-bold text-gray-800">+ 60€</span>
                    <p class="text-xs text-gray-600 mt-1">À peine le prix de 4 pizzas</p>
                </div>

                <div class="mb-6">
                    <button class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg font-medium hover:bg-blue-700 transition-colors flex items-center justify-center">
                        <div class="w-3 h-3 bg-white rounded-full mr-2"></div>
                        Sélectionner
                    </button>
                </div>

                <!-- Features -->
                <div class="space-y-3">
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2L3 7v11a1 1 0 001 1h3v-6h6v6h3a1 1 0 001-1V7l-7-5z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Entraînement illimité et gratuit</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Annulation jusqu'à 24 heures</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Repassez votre test pour 0€ (si test échoué)</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Recevez votre test le jour J</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M12 2l3.09 6.26L22 9l-5 4.87L18.18 22 12 18.27 5.82 22 7 13.87 2 9l6.91-.74L12 2z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Livret de préparation au test psychotechnique</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700">Téléchargez vos résultats en illimité</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Sticky Footer -->
    <footer class="fixed bottom-0 left-0 right-0 bg-gray-800 text-white p-4 shadow-lg">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Date and Location -->
            <div class="flex items-center bg-white text-gray-800 px-4 py-2 rounded-lg">
                <svg class="w-5 h-5 text-pink-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                </svg>
                <div>
                    <div class="font-semibold">Test psychotechnique le 28 mars à 14:00</div>
                    <div class="text-sm text-gray-600">15 rue de la république Montgeron 91230</div>
                </div>
            </div>

            <!-- Total and Continue Button -->
            <div class="flex items-center space-x-6">
                <div class="text-right">
                    <div class="text-sm text-gray-300">Total</div>
                    <div class="text-2xl font-bold">135€</div>
                </div>
                <a href="{{ route('andson.paiement') }}" class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-lg font-semibold flex items-center transition-colors">
                    Suivant
                    <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>