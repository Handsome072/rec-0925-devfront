<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test psychotechnique pour permis de conduire à Montgeron</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
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
    <main class="main-content">

        <!-- Subtitle -->
        <h2 class="subtitle-main">
            Complétez votre réservation
        </h2>

        <!-- Cards Container -->
        <div class="cards-container">

            <!-- Basic Card -->
            <div class="card-basic">
                <div class="card-basic-header">
                    <h3>Basic</h3>
                    <p class="subtitle">Votre test psychotechnique simple</p>
                </div>
                <div class="card-basic-body">
                    <div class="price-section">
                        <div class="price">+ 0€</div>
                    </div>

                    <button class="btn">
                        <div style="width: 12px; height: 12px; background: #FFFFFF; border-radius: 50%; margin-right: 8px;"></div>
                        Sélectionner
                    </button>

                    <!-- Features -->
                    <div class="features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('images/Natural User Interface 2-595b40b85ba036ed117ddbf9.svg') }}" alt="Entraînement" width="25" height="29">
                            </div>
                            <span class="feature-text">Entraînement illimité et gratuit</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('images/success-svgrepo-com.svg') }}" alt="Annulation" width="25" height="29">
                            </div>
                            <span class="feature-text">Annulation jusqu'à 48 heures</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="25" height="29" fill="#353535" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            </div>
                            <span class="feature-text">Recevez votre test le jour J</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Assurance Card -->
            <div class="card-assurance">
                <div class="card-assurance-header">
                    <h3>Assurance</h3>
                    <p class="subtitle">Votre test psychotechnique sans stress</p>
                </div>
                <div class="card-assurance-body">
                    <div class="price-section">
                        <div class="price">+ 40€</div>
                        <p class="price-subtitle">À peine le prix d'un resto</p>
                    </div>

                    <button class="btn">
                        <div style="width: 16px; height: 16px; background: #FFFFFF; border-radius: 50%; margin-right: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="10" height="8" fill="#0DBC0D" viewBox="0 0 10 8">
                                <path d="M9 1L3.5 6.5L1 4" stroke="#0DBC0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            </svg>
                        </div>
                        Sélectionner
                    </button>

                    <!-- Features -->
                    <div class="features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('images/Natural User Interface 2-595b40b85ba036ed117ddbf9.svg') }}" alt="Entraînement" width="25" height="29">
                            </div>
                            <span class="feature-text">Entraînement illimité et gratuit</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('images/success-svgrepo-com.svg') }}" alt="Annulation" width="25" height="29">
                            </div>
                            <span class="feature-text">Annulation jusqu'à 48 heures</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('images/load.svg') }}" alt="Repassez votre test" width="25" height="29">
                            </div>
                            <span class="feature-text">Repassez votre test pour 0€ (si test échoué)</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="25" height="29" fill="#353535" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <span class="feature-text">Recevez votre test le jour J</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('images/livre.png') }}" alt="Livret" width="25" height="29">
                            </div>
                            <span class="feature-text">Livret de préparation au test psychotechnique</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Complet Card -->
            <div class="card-complet">
                <div class="card-complet-header">
                    <h3>Complet</h3>
                    <p class="subtitle">Votre test psychotechnique tout compris</p>
                </div>
                <div class="card-complet-body">
                    <div class="price-section">
                        <div class="price">+ 60€</div>
                        <p class="price-subtitle">À peine le prix de 4 pizzas</p>
                    </div>

                    <button class="btn">
                        <div style="width: 12px; height: 12px; background: #FFFFFF; border-radius: 50%; margin-right: 8px;"></div>
                        Sélectionner
                    </button>

                    <!-- Features -->
                    <div class="features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('images/Natural User Interface 2-595b40b85ba036ed117ddbf9.svg') }}" alt="Entraînement" width="25" height="29">
                            </div>
                            <span class="feature-text">Entraînement illimité et gratuit</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('images/success-svgrepo-com.svg') }}" alt="Annulation" width="25" height="29">
                            </div>
                            <span class="feature-text">Annulation jusqu'à 24 heures</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('images/load.svg') }}" alt="Repassez votre test" width="25" height="29">
                            </div>
                            <span class="feature-text">Repassez votre test pour 0€ (si test échoué)</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="25" height="29" fill="#353535" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <span class="feature-text">Recevez votre test le jour J</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('images/livre.png') }}" alt="Livret" width="25" height="29">
                            </div>
                            <span class="feature-text">Livret de préparation au test psychotechnique</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('images/download.png') }}" alt="Téléchargement" width="25" height="29">
                            </div>
                            <span class="feature-text">Téléchargez vos résultats en illimité</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Sticky Footer -->
    <footer class="footer-sticky">
        <div class="footer-content">
            <!-- Date and Location -->
            <div class="footer-info">
                <svg width="20" height="20" fill="#E91E63" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                </svg>
                <div>
                    <div class="footer-info-title">Test psychotechnique le 28 mars à 14:00</div>
                    <div class="footer-info-subtitle">15 rue de la république Montgeron 91230</div>
                </div>
            </div>

            <!-- Total and Continue Button -->
            <div class="footer-actions">
                <div class="footer-total">
                    <div class="footer-total-label">Total</div>
                    <div class="footer-total-amount">135€</div>
                </div>
                <a href="{{ route('andson.paiement') }}" class="footer-btn">
                    Suivant
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>