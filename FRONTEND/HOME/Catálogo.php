<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Joyería Elegante</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container header-content">
            <div class="logo">
                <a href="Index.html" class="logo-link">
                    <span class="logo-icon">♦</span>
                    <span class="logo-text">Joyería Elegante</span>
                </a>
            </div>
            <nav class="nav">
                <ul class="nav-menu">
                    <li><a href="Index.html" class="nav-link">Inicio</a></li>
                    <li href="#catalogo" class="nav-link active">Catálogo</li>
                    <li><a href="Index.html#nosotros" class="nav-link">Nosotros</a></li>
                    <li><a href="Index.html#contacto" class="nav-link">Contacto</a></li>
                </ul>
            </nav>
            <div class="header-actions">
                <div class="search-container">
                    <button class="btn-icon search-toggle" aria-label="Buscar">
                        <span>🔍</span>
                    </button>
                    <div class="search-input-wrapper">
                        <input type="text" class="search-input" placeholder="Buscar productos...">
                        <button class="search-close" aria-label="Cerrar búsqueda">✕</button>
                    </div>
                </div>
                <a href="Carrito.php" class="btn-icon" aria-label="Carrito">
                    <span>🛒</span>
                    <span class="cart-count">3</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="catalog-page">
        <div class="container">
            <h1 class="page-title">Nuestro Catálogo</h1>
            <p class="section-subtitle">Explora nuestra colección completa de joyería exclusiva</p>

            <!-- Anillos Category -->
            <section id="anillos" class="catalog-section">
                <div class="catalog-header">
                    <h2 class="catalog-title">Anillos</h2>
                    <p class="catalog-description">Elegantes piezas para toda ocasión</p>
                </div>
                <div class="products-grid">
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Nuevo</span>
                            <div class="product-placeholder">💍</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Anillos</span>
                            <h3 class="product-name">Anillo Diamante</h3>
                            <p class="product-description">Anillo con piedra diamante de corte brillante</p>
                            <div class="product-footer">
                                <span class="product-price">$1,299.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">💍</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Anillos</span>
                            <h3 class="product-name">Anillo Rubí</h3>
                            <p class="product-description">Anillo con rubí sintético de alta calidad</p>
                            <div class="product-footer">
                                <span class="product-price">$459.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">-15%</span>
                            <div class="product-placeholder">💍</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Anillos</span>
                            <h3 class="product-name">Anillo Esmeralda</h3>
                            <p class="product-description">Anillo con esmeralda colombiana natural</p>
                            <div class="product-footer">
                                <span class="product-price">$889.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">💍</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Anillos</span>
                            <h3 class="product-name">Anillo Oro Blanco</h3>
                            <p class="product-description">Anillo de oro blanco 18k con zirconias</p>
                            <div class="product-footer">
                                <span class="product-price">$679.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Popular</span>
                            <div class="product-placeholder">💍</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Anillos</span>
                            <h3 class="product-name">Anillo Compromiso</h3>
                            <p class="product-description">Anillo de compromiso con diamante central</p>
                            <div class="product-footer">
                                <span class="product-price">$2,499.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">💍</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Anillos</span>
<h3 class="product-name">Anillo Infinity</h3>
                            <p class="product-description">Anillo estilo infinito con piedras</p>
                            <div class="product-footer">
                                <span class="product-price">$349.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Collares Category -->
            <section id="collares" class="catalog-section">
                <div class="catalog-header">
                    <h2 class="catalog-title">Collares</h2>
                    <p class="catalog-description">Diseños que iluminan tu mirada</p>
                </div>
                <div class="products-grid">
                    <article class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">📿</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Collares</span>
                            <h3 class="product-name">Collar Perlas</h3>
                            <p class="product-description">Collar de perlas naturales cultivadas</p>
                            <div class="product-footer">
                                <span class="product-price">$899.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Nuevo</span>
                            <div class="product-placeholder">📿</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Collares</span>
                            <h3 class="product-name">Collar Cristal</h3>
                            <p class="product-description">Collar con cristales Swarovski</p>
                            <div class="product-footer">
                                <span class="product-price">$329.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">-20%</span>
                            <div class="product-placeholder">📿</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Collares</span>
                            <h3 class="product-name">Collar Oro</h3>
                            <p class="product-description">Collar de oro 18k con dije exclusivo</p>
                            <div class="product-footer">
                                <span class="product-price">$1,199.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">📿</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Collares</span>
                            <h3 class="product-name">Collar Cuello</h3>
                            <p class="product-description">Collar de cubic zirconia tipo garganta</p>
                            <div class="product-footer">
                                <span class="product-price">$549.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Popular</span>
                            <div class="product-placeholder">📿</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Collares</span>
                            <h3 class="product-name">Collar Princesas</h3>
                            <p class="product-description">Collar estilo princesas con piedras de colores</p>
                            <div class="product-footer">
                                <span class="product-price">$759.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">📿</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Collares</span>
                            <h3 class="product-name">Collar Lavalliere</h3>
                            <p class="product-description">Collar lavalliere con piedra central</p>
                            <div class="product-footer">
                                <span class="product-price">$429.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Arracadas Category -->
            <section id="arracadas" class="catalog-section">
                <div class="catalog-header">
                    <h2 class="catalog-title">Arracadas</h2>
                    <p class="catalog-description">Elegancia en cada detalle</p>
                </div>
                <div class="products-grid">
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">-20%</span>
                            <div class="product-placeholder">💎</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Arracadas</span>
                            <h3 class="product-name">Arracadas Zafiro</h3>
                            <p class="product-description">Arracadas con zafiros azules naturales</p>
                            <div class="product-footer">
                                <span class="product-price">$649.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">💎</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Arracadas</span>
                            <h3 class="product-name">Arracadas Diamante</h3>
                            <p class="product-description">Arracadas con diamantes pequeños</p>
                            <div class="product-footer">
                                <span class="product-price">$929.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Nuevo</span>
                            <div class="product-placeholder">💎</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Arracadas</span>
                            <h3 class="product-name">Arracadas Perla</h3>
                            <p class="product-description">Arracadas con perlas cultivadas</p>
                            <div class="product-footer">
                                <span class="product-price">$389.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">💎</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Arracadas</span>
                            <h3 class="product-name">Arracadas Oro</h3>
                            <p class="product-description">Arracadas de oro 18k estilo滴</p>
                            <div class="product-footer">
                                <span class="product-price">$559.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">-15%</span>
                            <div class="product-placeholder">💎</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Arracadas</span>
                            <h3 class="product-name">Arracadas Rubí</h3>
                            <p class="product-description">Arracadas con rubíes sintéticos</p>
                            <div class="product-footer">
                                <span class="product-price">$449.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Popular</span>
                            <div class="product-placeholder">💎</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Arracadas</span>
                            <h3 class="product-name">Arracadas Esfera</h3>
                            <p class="product-description">Arracadas estilo bola con circones</p>
                            <div class="product-footer">
                                <span class="product-price">$299.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Pulseras Category -->
            <section id="pulseras" class="catalog-section">
                <div class="catalog-header">
                    <h2 class="catalog-title">Pulseras</h2>
                    <p class="catalog-description">Joyas que abrazan tu muñeca</p>
                </div>
                <div class="products-grid">
                    <article class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">⭕</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Pulseras</span>
                            <h3 class="product-name">Pulsera Oro</h3>
                            <p class="product-description">Pulsera de oro 18k con diamantes</p>
                            <div class="product-footer">
                                <span class="product-price">$1,499.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Nuevo</span>
                            <div class="product-placeholder">⭕</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Pulseras</span>
                            <h3 class="product-name">Pulsera Cadena</h3>
                            <p class="product-description">Pulsera de cadena elegante</p>
                            <div class="product-footer">
                                <span class="product-price">$459.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">-25%</span>
                            <div class="product-placeholder">⭕</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Pulseras</span>
                            <h3 class="product-name">Pulsera Pandora</h3>
                            <p class="product-description">Pulsera tipo Pandora con dijes</p>
                            <div class="product-footer">
                                <span class="product-price">$689.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">⭕</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Pulseras</span>
                            <h3 class="product-name">Pulsera Tenis</h3>
                            <p class="product-description">Pulsera tipo tenis con zirconias</p>
                            <div class="product-footer">
                                <span class="product-price">$379.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Popular</span>
                            <div class="product-placeholder">⭕</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Pulseras</span>
                            <h3 class="product-name">Pulsera Charm</h3>
                            <p class="product-description">Pulsera con charms exclusivos</p>
                            <div class="product-footer">
                                <span class="product-price">$829.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">-10%</span>
                            <div class="product-placeholder">⭕</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Pulseras</span>
                            <h3 class="product-name">Pulsera Cuero</h3>
                            <p class="product-description">Pulsera de cuero con placa de oro</p>
                            <div class="product-footer">
                                <span class="product-price">$249.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <span class="logo-icon">♦</span>
                        <span class="logo-text">Joyería Elegante</span>
                    </div>
                    <p class="footer-description">
                        Tu destino para joyería exclusiva y artesanías únicas. 
                        Brindando belleza y elegancia desde 2004.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="Facebook">f</a>
                        <a href="#" class="social-link" aria-label="Instagram">ig</a>
                        <a href="#" class="social-link" aria-label="Twitter">tw</a>
                        <a href="#" class="social-link" aria-label="Pinterest">pi</a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4 class="footer-title">Enlaces Rápidos</h4>
                    <ul class="footer-links">
                        <li><a href="Index.html">Inicio</a></li>
                        <li><a href="#catalogo">Catálogo</a></li>
                        <li><a href="Index.html#nosotros">Nosotros</a></li>
                        <li><a href="Index.html#contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4 class="footer-title">Categorías</h4>
                    <ul class="footer-links">
                        <li><a href="#anillos">Anillos</a></li>
                        <li><a href="#collares">Collares</a></li>
                        <li><a href="#arracadas">Arracadas</a></li>
                        <li><a href="#pulseras">Pulseras</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4 class="footer-title">Newsletter</h4>
                    <p class="footer-text">Suscríbete para recibir ofertas exclusivas</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Tu email" required>
                        <button type="submit" class="btn btn-primary">Suscribirse</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Joyería Elegante. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Search toggle functionality
        const searchToggle = document.querySelector('.search-toggle');
        const searchWrapper = document.querySelector('.search-input-wrapper');
        const searchClose = document.querySelector('.search-close');
        const searchInput = document.querySelector('.search-input');

        if (searchToggle) {
            searchToggle.addEventListener('click', (e) => {
                e.stopPropagation();
                searchWrapper.classList.toggle('active');
                if (searchWrapper.classList.contains('active')) {
                    searchInput.focus();
                }
            });
        }

        if (searchClose) {
            searchClose.addEventListener('click', () => {
                searchWrapper.classList.remove('active');
            });
        }

        if (searchWrapper) {
            document.addEventListener('click', (e) => {
                if (!searchWrapper.contains(e.target) && !searchToggle.contains(e.target)) {
                    searchWrapper.classList.remove('active');
                }
            });

            searchInput.addEventListener('click', (e) => {
                e.stopPropagation();
            });
        }
    </script>
</body>
</html>
