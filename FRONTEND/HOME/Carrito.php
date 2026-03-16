<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras - Joyería Elegante</title>
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
                    <li><a href="Index.html#catalogo" class="nav-link">Catálogo</a></li>
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
    <main class="cart-page">
        <div class="container">
            <h1 class="page-title">Tu Carrito de Compras</h1>
            
            <div class="cart-wrapper">
                <!-- Cart Items -->
                <div class="cart-items">
                    <div class="cart-item">
                        <div class="cart-item-image">
                            <span class="item-emoji">💍</span>
                        </div>
                        <div class="cart-item-details">
                            <span class="cart-item-category">Anillos</span>
                            <h3 class="cart-item-name">Anillo Diamante</h3>
                            <p class="cart-item-description">Anillo con piedra diamante de corte brillante</p>
                        </div>
                        <div class="cart-item-quantity">
                            <button class="qty-btn" aria-label="Disminuir cantidad">-</button>
                            <input type="number" value="1" min="1" max="10" class="qty-input">
                            <button class="qty-btn" aria-label="Aumentar cantidad">+</button>
                        </div>
                        <div class="cart-item-price">
                            <span class="price">$1,299.00</span>
                        </div>
                        <button class="cart-item-remove" aria-label="Eliminar producto">✕</button>
                    </div>

                    <div class="cart-item">
                        <div class="cart-item-image">
                            <span class="item-emoji">📿</span>
                        </div>
                        <div class="cart-item-details">
                            <span class="cart-item-category">Collares</span>
                            <h3 class="cart-item-name">Collar Perlas</h3>
                            <p class="cart-item-description">Collar de perlas naturales cultivadas</p>
                        </div>
                        <div class="cart-item-quantity">
                            <button class="qty-btn" aria-label="Disminuir cantidad">-</button>
                            <input type="number" value="1" min="1" max="10" class="qty-input">
                            <button class="qty-btn" aria-label="Aumentar cantidad">+</button>
                        </div>
                        <div class="cart-item-price">
                            <span class="price">$899.00</span>
                        </div>
                        <button class="cart-item-remove" aria-label="Eliminar producto">✕</button>
                    </div>

                    <div class="cart-item">
                        <div class="cart-item-image">
                            <span class="item-emoji">💎</span>
                        </div>
                        <div class="cart-item-details">
                            <span class="cart-item-category">Arracadas</span>
                            <h3 class="cart-item-name">Arracadas Zafiro</h3>
                            <p class="cart-item-description">Arracadas con zafiros azules naturales</p>
                        </div>
                        <div class="cart-item-quantity">
                            <button class="qty-btn" aria-label="Disminuir cantidad">-</button>
                            <input type="number" value="1" min="1" max="10" class="qty-input">
                            <button class="qty-btn" aria-label="Aumentar cantidad">+</button>
                        </div>
                        <div class="cart-item-price">
                            <span class="price">$649.00</span>
                        </div>
                        <button class="cart-item-remove" aria-label="Eliminar producto">✕</button>
                    </div>
                </div>

                <!-- Cart Summary -->
                <div class="cart-summary">
                    <h2 class="summary-title">Resumen del Pedido</h2>
                    
                    <div class="summary-details">
                        <div class="summary-row">
                            <span>Subtotal</span>
                            <span>$2,847.00</span>
                        </div>
                        <div class="summary-row">
                            <span>Envío</span>
                            <span class="free-shipping">GRATIS</span>
                        </div>
                        <div class="summary-row">
                            <span>Impuestos</span>
                            <span>$455.52</span>
                        </div>
                    </div>
                    
                    <div class="summary-total">
                        <span>Total</span>
                        <span class="total-amount">$3,302.52</span>
                    </div>

                    <button class="btn btn-primary btn-checkout">Proceder al Pago</button>
                    
                    <a href="Index.html#catalogo" class="continue-shopping">
                        ← Continuar Comprando
                    </a>

                    <div class="summary-features">
                        <div class="feature-item">
                            <span class="feature-icon">🔒</span>
                            <span>Compra segura</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">🚚</span>
                            <span>Envío gratis</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-icon">↩️</span>
                            <span>30 días de devolución</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recommended Products -->
            <section class="recommended-products">
                <h2 class="section-title">También te puede gustar</h2>
                <div class="products-grid">
                    <article class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">⭕</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Pulseras</span>
                            <h3 class="product-name">Pulsera Oro</h3>
                            <div class="product-footer">
                                <span class="product-price">$1,499.00</span>
                                <button class="btn btn-secondary">Agregar</button>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Nuevo</span>
                            <div class="product-placeholder">💍</div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">Anillos</span>
                            <h3 class="product-name">Anillo Rubí</h3>
                            <div class="product-footer">
                                <span class="product-price">$459.00</span>
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
                            <h3 class="product-name">Collar Cristal</h3>
                            <div class="product-footer">
                                <span class="product-price">$329.00</span>
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
                    </p>
                </div>
                <div class="footer-section">
                    <h4 class="footer-title">Enlaces Rápidos</h4>
                    <ul class="footer-links">
                        <li><a href="Index.html#inicio">Inicio</a></li>
                        <li><a href="Index.html#catalogo">Catálogo</a></li>
                        <li><a href="Index.html#contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Joyería Elegante. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>
