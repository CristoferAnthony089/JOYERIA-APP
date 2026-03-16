<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lector NFC - Joyería Elegante</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        .nfc-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            text-align: center;
        }

        .nfc-icon {
            font-size: 80px;
            margin-bottom: 20px;
            display: inline-block;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.7; }
            100% { transform: scale(1); opacity: 1; }
        }

        .nfc-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: #1a1a1a;
            margin-bottom: 15px;
        }

        .nfc-description {
            color: #666;
            margin-bottom: 30px;
            font-size: 1rem;
            line-height: 1.6;
        }

        .nfc-button {
            background: linear-gradient(135deg, #1a1a1a 0%, #333 100%);
            color: white;
            border: none;
            padding: 15px 40px;
            font-size: 1.1rem;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .nfc-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .nfc-button:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
        }

        .nfc-button.scanning {
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
            animation: scan-pulse 1.5s infinite;
        }

        @keyframes scan-pulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(76, 175, 80, 0.4); }
            50% { box-shadow: 0 0 0 15px rgba(76, 175, 80, 0); }
        }

        .nfc-result {
            margin-top: 30px;
            padding: 25px;
            border-radius: 15px;
            background: #f8f8f8;
            display: none;
        }

        .nfc-result.show {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .nfc-result h3 {
            color: #1a1a1a;
            margin-bottom: 15px;
            font-family: 'Playfair Display', serif;
        }

        .nfc-data {
            text-align: left;
            background: white;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #1a1a1a;
        }

        .nfc-data-item {
            margin: 10px 0;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .nfc-data-item:last-child {
            border-bottom: none;
        }

        .nfc-data-label {
            font-weight: 700;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        .nfc-data-value {
            color: #666;
            font-family: monospace;
            font-size: 1.1rem;
            word-break: break-all;
        }

        .nfc-error {
            background: #ffebee;
            color: #c62828;
            padding: 15px 20px;
            border-radius: 10px;
            margin-top: 20px;
            display: none;
        }

        .nfc-error.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        .nfc-warning {
            background: #fff3e0;
            color: #e65100;
            padding: 15px 20px;
            border-radius: 10px;
            margin-top: 20px;
            font-size: 0.9rem;
        }

        .nfc-info {
            background: #e3f2fd;
            color: #1565c0;
            padding: 15px 20px;
            border-radius: 10px;
            margin-top: 20px;
            font-size: 0.9rem;
        }

        .status-indicator {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 8px;
            background: #ccc;
        }

        .status-indicator.active {
            background: #4CAF50;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .compatibility-list {
            text-align: left;
            margin-top: 15px;
            padding-left: 20px;
        }

        .compatibility-list li {
            margin: 5px 0;
            color: #666;
        }

        .compatibility-list li.supported {
            color: #4CAF50;
        }

        .compatibility-list li.unsupported {
            color: #f44336;
        }

        .history-section {
            margin-top: 40px;
        }

        .history-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: #1a1a1a;
            margin-bottom: 20px;
        }

        .history-list {
            text-align: left;
            max-height: 300px;
            overflow-y: auto;
        }

        .history-item {
            background: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            border-left: 3px solid #1a1a1a;
        }

        .history-item-time {
            font-size: 0.8rem;
            color: #999;
        }

        .history-item-data {
            font-family: monospace;
            color: #333;
            margin-top: 5px;
        }

        .clear-history {
            background: #f44336;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            margin-top: 15px;
            font-size: 0.9rem;
        }

        .clear-history:hover {
            background: #d32f2f;
        }

        .manual-input {
            text-align: left;
            background: white;
            padding: 20px;
            border-radius: 15px;
            margin-top: 30px;
        }

        .manual-input label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .manual-input input, 
        .manual-input textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .manual-input textarea {
            resize: vertical;
            min-height: 80px;
        }
    </style>
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
                    <li><a href="Catálogo.php" class="nav-link">Catálogo</a></li>
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
    <main class="nfc-container">
        <div class="nfc-icon">📱</div>
        <h1 class="nfc-title">Lector de Tarjetas NFC</h1>
        <p class="nfc-description">
            Acérca tu tarjeta o tag NFC a la parte trasera de tu dispositivo para leer los datos automáticamente.
            <br><br>
            <span id="status-text"><span class="status-indicator" id="status-dot"></span>Esperando iniciar escaneo...</span>
        </p>

        <button id="nfc-scan-btn" class="nfc-button">
            📡 Iniciar Escaneo NFC
        </button>

        <!-- Diagnostic Button -->
        <button id="nfc-diagnostic-btn" class="nfc-button" style="background: #666; font-size: 0.9rem; padding: 10px 20px; margin-left: 10px;">
            🔧 Diagnosticar NFC
        </button>

        <div id="nfc-diagnostic-result" class="nfc-result" style="text-align: left;"></div>

        <div id="nfc-result" class="nfc-result">
            <h3>✅ Datos Leídos Exitosamente</h3>
            <div class="nfc-data">
                <div class="nfc-data-item">
                    <span class="nfc-data-label">ID de la Tarjeta:</span>
                    <span class="nfc-data-value" id="nfc-id">-</span>
                </div>
                <div class="nfc-data-item">
                    <span class="nfc-data-label">Tipo de Tag:</span>
                    <span class="nfc-data-value" id="nfc-type">-</span>
                </div>
                <div class="nfc-data-item">
                    <span class="nfc-data-label">Datos:</span>
                    <span class="nfc-data-value" id="nfc-data">-</span>
                </div>
                <div class="nfc-data-item">
                    <span class="nfc-data-label">Timestamp:</span>
                    <span class="nfc-data-value" id="nfc-timestamp">-</span>
                </div>
            </div>
        </div>

        <div id="nfc-error" class="nfc-error"></div>

        <div id="nfc-compatibility" class="nfc-warning">
            <strong>⚠️ Nota de Compatibilidad:</strong>
            <ul class="compatibility-list">
                <li class="supported">✅ Chrome para Android (versión 89+)</li>
                <li class="supported">✅ Dispositivos Android con NFC</li>
                <li class="unsupported">❌ Safari (iOS tiene NFC limitado)</li>
                <li class="unsupported">❌ Navegadores de escritorio</li>
            </ul>
            <p style="margin-top: 10px; font-size: 0.85rem;">
                <strong>Importante:</strong> Debes usar HTTPS o localhost para que funcione Web NFC.
                En Android, asegúrate de tener NFC habilitado en configuraciones.
            </p>
        </div>

        <div class="nfc-info">
            <strong>💡 ¿Cómo usar?</strong><br>
            1. Presiona el botón "Iniciar Escaneo"<br>
            2. Concede permisos de NFC cuando se te pide<br>
            3. Acérca tu tarjeta NFC al dispositivo<br>
            4. ¡Los datos aparecerán automáticamente!
        </div>

        <!-- Manual Input Alternative -->
        <div class="history-section">
            <h3 class="history-title">🔢 Entrada Manual de Datos</h3>
            <p style="color: #666; margin-bottom: 15px; font-size: 0.9rem;">
                Si NFC no está disponible, ingresa los datos de la tarjeta manualmente:
            </p>
            <form id="manual-input-form" class="manual-input">
                <label for="manual-id">ID de Tarjeta:</label>
                <input type="text" id="manual-id" placeholder="Ej: ABC123456789">
                
                <label for="manual-name">Nombre del Cliente:</label>
                <input type="text" id="manual-name" placeholder="Ej: Juan Pérez">
                
                <label for="manual-notes">Notas:</label>
                <textarea id="manual-notes" rows="3" placeholder="Información adicional..."></textarea>
                
                <button type="submit" class="btn btn-primary" style="width: 100%;">✅ Guardar Datos</button>
            </form>
        </div>

        <div class="history-section">
            <h3 class="history-title">📋 Historial de Lecturas</h3>
            <div id="history-list" class="history-list"></div>
            <button id="clear-history" class="clear-history">🗑️ Limpiar Historial</button>
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
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Joyería Elegante. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Variables
        let nfcReading = false;
        let ndefReader = null;
        const historyKey = 'nfc_reading_history';
        
        // DOM Elements
        const scanBtn = document.getElementById('nfc-scan-btn');
        const nfcResult = document.getElementById('nfc-result');
        const nfcError = document.getElementById('nfc-error');
        const statusText = document.getElementById('status-text');
        const statusDot = document.getElementById('status-dot');
        
        // Data elements
        const nfcIdEl = document.getElementById('nfc-id');
        const nfcTypeEl = document.getElementById('nfc-type');
        const nfcDataEl = document.getElementById('nfc-data');
        const nfcTimestampEl = document.getElementById('nfc-timestamp');
        
        // History elements
        const historyList = document.getElementById('history-list');
        const clearHistoryBtn = document.getElementById('clear-history');

        // Check NFC support
        function checkNFCSupport() {
            // Check if NDEFReader is available
            if (!('NDEFReader' in window)) {
                showError('❌ Tu navegador NO soporta la API Web NFC.<br><br>' +
                    'Por favor usa <strong>Chrome para Android</strong> (versión 89 o superior).');
                scanBtn.disabled = true;
                scanBtn.textContent = '🚫 NFC No Disponible';
                return false;
            }
            
            // Check protocol and hostname
            const protocol = window.location.protocol;
            const hostname = window.location.hostname;
            const isLocalhost = hostname === 'localhost' || hostname === '127.0.0.1';
            const isHTTPS = protocol === 'https:';
            const isIPAddress = /^(192\.168|10\.|172\.(1[6-9]|2[0-9]|3[0-1]))\./.test(hostname);
            
            // Check if running on secure context or localhost
            if (!isLocalhost && !isHTTPS) {
                showError('❌ Se requiere conexión segura para NFC.<br><br>' +
                    'Actualmente: <strong>' + protocol + '//' + hostname + '</strong><br><br>' +
                    'Soluciones:<br>' +
                    '• Usa <strong>localhost</strong> o <strong>127.0.0.1</strong> en la URL<br>' +
                    '• O instala HTTPS con certificado SSL');
                scanBtn.disabled = true;
                scanBtn.textContent = '🚫 Se requiere HTTPS';
                return false;
            }
            
            // Check if using IP address (which doesn't work for NFC)
            if (isIPAddress) {
                showError('❌ Las direcciones IP no funcionan para NFC.<br><br>' +
                    'Actualmente: <strong>http://' + hostname + '</strong><br><br>' +
                    'Cambia la URL a:<br>' +
                    '• <strong>http://localhost/JOYERIA-APP/FRONTEND/HOME/Lugar.php</strong><br>' +
                    '• O <strong>http://127.0.0.1/JOYERIA-APP/FRONTEND/HOME/Lugar.php</strong>');
                scanBtn.disabled = true;
                scanBtn.textContent = '🚫 Usa localhost';
                return false;
            }
            
            return true;
        }

        // Show error message
        function showError(message) {
            nfcError.innerHTML = message;
            nfcError.classList.add('show');
            nfcResult.classList.remove('show');
        }

        // Hide error message
        function hideError() {
            nfcError.classList.remove('show');
        }

        // Update status
        function updateStatus(text, active) {
            statusText.innerHTML = '<span class="status-indicator ' + (active ? 'active' : '') + '" id="status-dot"></span>' + text;
        }

        // Format timestamp
        function formatTimestamp(date) {
            return date.toLocaleString('es-MX', {
                year: 'numeric',
                month: '2-digit',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
        }

        // Decode NDEF message
        function decodeNDEF(records) {
            let decodedData = [];
            
            records.forEach(function(record, index) {
                if (record.recordType === 'text') {
                    const textDecoder = new TextDecoder(record.encoding);
                    decodedData.push('Texto ' + (index + 1) + ': ' + textDecoder.decode(record.data));
                } else if (record.recordType === 'url') {
                    const textDecoder = new TextDecoder();
                    decodedData.push('URL ' + (index + 1) + ': ' + textDecoder.decode(record.data));
                } else if (record.recordType === 'mime') {
                    decodedData.push('Mime ' + (index + 1) + ': ' + record.mediaType);
                } else if (record.recordType === 'unknown') {
                    const textDecoder = new TextDecoder();
                    decodedData.push('Datos ' + (index + 1) + ': ' + textDecoder.decode(record.data));
                } else {
                    decodedData.push('Tipo ' + (index + 1) + ': ' + record.recordType);
                }
            });
            
            return decodedData.join('\n') || 'Sin datos';
        }

        // Display NFC data
        function displayNFCData(id, type, data, timestamp) {
            nfcIdEl.textContent = id || 'No disponible';
            nfcTypeEl.textContent = type || 'NDEF';
            nfcDataEl.textContent = data;
            nfcTimestampEl.textContent = formatTimestamp(timestamp);
            
            nfcResult.classList.add('show');
            hideError();
            
            // Add to history
            addToHistory(id, type, data, timestamp);
        }

        // Save to history
        function addToHistory(id, type, data, timestamp) {
            let history = JSON.parse(localStorage.getItem(historyKey) || '[]');
            
            history.unshift({
                id: id,
                type: type,
                data: data,
                timestamp: timestamp.toISOString()
            });
            
            // Keep only last 10 entries
            if (history.length > 10) {
                history = history.slice(0, 10);
            }
            
            localStorage.setItem(historyKey, JSON.stringify(history));
            renderHistory();
        }

        // Render history
        function renderHistory() {
            let history = JSON.parse(localStorage.getItem(historyKey) || '[]');
            
            if (history.length === 0) {
                historyList.innerHTML = '<p style="text-align: center; color: #999;">No hay lecturas previas</p>';
                return;
            }
            
            historyList.innerHTML = history.map(function(item) {
                return '<div class="history-item">' +
                    '<div class="history-item-time">' + formatTimestamp(new Date(item.timestamp)) + '</div>' +
                    '<div class="history-item-data">' +
                    '<strong>ID:</strong> ' + (item.id || 'N/A') + '<br>' +
                    '<strong>Tipo:</strong> ' + (item.type || 'NDEF') + '<br>' +
                    '<strong>Datos:</strong> ' + item.data.substring(0, 50) + (item.data.length > 50 ? '...' : '') +
                    '</div></div>';
            }).join('');
        }

        // Clear history
        clearHistoryBtn.addEventListener('click', function() {
            localStorage.removeItem(historyKey);
            renderHistory();
        });

        // Start NFC scanning
        async function startNFCReading() {
            if (!checkNFCSupport()) return;
            
            try {
                hideError();
                ndefReader = new NDEFReader();
                
                // Start scanning
                await ndefReader.scan();
                
                nfcReading = true;
                scanBtn.textContent = '⏹️ Detener Escaneo';
                scanBtn.classList.add('scanning');
                updateStatus('Escaneando...Acerca tu tarjeta NFC', true);
                
                // Handle NFC reads
                ndefReader.onreading = function(event) {
                    console.log('NFC Tag detected:', event);
                    
                    const timestamp = new Date();
                    let id = '';
                    let type = 'NDEF';
                    let data = '';
                    
                    // Get serial number if available
                    if (event.serialNumber) {
                        id = event.serialNumber;
                    }
                    
                    // Get message records
                    if (event.message && event.message.records) {
                        data = decodeNDEF(event.message.records);
                    }
                    
                    displayNFCData(id, type, data, timestamp);
                    
                    // Provide feedback
                    updateStatus('✅ Tarjeta leída correctamente!', false);
                    setTimeout(function() {
                        if (nfcReading) {
                            updateStatus('Escaneando...Acerca tu tarjeta NFC', true);
                        }
                    }, 3000);
                };
                
                // Handle errors during scanning
                ndefReader.onreadingerror = function(event) {
                    console.log('NFC Reading error:', event);
                    showError('❌ Error al leer la tarjeta NFC. Intenta de nuevo.');
                };
                
            } catch (error) {
                console.error('NFC Error:', error);
                
                let errorMessage = '❌ Error al iniciar NFC: ';
                
                if (error.name === 'NotAllowedError') {
                    errorMessage += 'Permiso denegado. Por favor permite el acceso NFC.';
                } else if (error.name === 'NotFoundError') {
                    errorMessage += 'NFC no está disponible en este dispositivo.';
                } else if (error.name === 'NotSupportedError') {
                    errorMessage += 'NFC no es compatible con esta configuración.';
                } else {
                    errorMessage += error.message;
                }
                
                showError(errorMessage);
                stopNFCReading();
            }
        }

        // Stop NFC scanning
        async function stopNFCReading() {
            if (ndefReader && nfcReading) {
                try {
                    await ndefReader.cancel();
                } catch (error) {
                    console.log('Error canceling NFC:', error);
                }
            }
            
            nfcReading = false;
            ndefReader = null;
            scanBtn.textContent = '📡 Iniciar Escaneo NFC';
            scanBtn.classList.remove('scanning');
            scanBtn.disabled = false;
            updateStatus('Esperando iniciar escaneo...', false);
        }

        // Button click handler
        scanBtn.addEventListener('click', function() {
            if (nfcReading) {
                stopNFCReading();
            } else {
                startNFCReading();
            }
        });

        // Diagnostic button handler
        const diagnosticBtn = document.getElementById('nfc-diagnostic-btn');
        const diagnosticResult = document.getElementById('nfc-diagnostic-result');
        
        if (diagnosticBtn) {
            diagnosticBtn.addEventListener('click', function() {
                let diagnostics = '<h3>🔍 Diagnóstico de NFC</h3><div class="nfc-data">';
                
                // Check 1: NDEFReader support
                const hasNDEFReader = 'NDEFReader' in window;
                diagnostics += '<div class="nfc-data-item">' +
                    '<span class="nfc-data-label">API NDEFReader:</span>' +
                    '<span class="nfc-data-value">' + (hasNDEFReader ? '✅ Disponible' : '❌ No disponible') + '</span>' +
                    '</div>';
                
                // Check 2: Protocol
                const protocol = window.location.protocol;
                const hostname = window.location.hostname;
                const isSecure = protocol === 'https:' || hostname === 'localhost' || hostname === '127.0.0.1';
                diagnostics += '<div class="nfc-data-item">' +
                    '<span class="nfc-data-label">Protocolo:</span>' +
                    '<span class="nfc-data-value">' + protocol + ' (' + hostname + ')</span>' +
                    '</div>';
                diagnostics += '<div class="nfc-data-item">' +
                    '<span class="nfc-data-label">Conexión segura:</span>' +
                    '<span class="nfc-data-value">' + (isSecure ? '✅ Seguro' : '❌ Inseguro (debe ser HTTPS)') + '</span>' +
                    '</div>';
                
                // Check 3: User Agent
                const userAgent = navigator.userAgent;
                const isAndroid = /Android/i.test(userAgent);
                const isChrome = /Chrome/i.test(userAgent) && !/Edge/i.test(userAgent);
                const isIOS = /iPhone|iPad|iPod/i.test(userAgent);
                diagnostics += '<div class="nfc-data-item">' +
                    '<span class="nfc-data-label">Dispositivo:</span>' +
                    '<span class="nfc-data-value">' + (isAndroid ? 'Android' : (isIOS ? 'iOS' : 'Otro')) + '</span>' +
                    '</div>';
                diagnostics += '<div class="nfc-data-item">' +
                    '<span class="nfc-data-label">Navegador:</span>' +
                    '<span class="nfc-data-value">' + (isChrome ? 'Chrome' : 'Otro') + '</span>' +
                    '</div>';
                
                // Check 4: NFC enabled on device (try to create NDEFReader)
                if (hasNDEFReader && isSecure && isAndroid && isChrome) {
                    diagnostics += '<div class="nfc-data-item">' +
                        '<span class="nfc-data-label">Siguiente paso:</span>' +
                        '<span class="nfc-data-value">Presiona "Iniciar Escaneo NFC" para probar</span>' +
                        '</div>';
                } else {
                    let issues = [];
                    if (!hasNDEFReader) issues.push('Navegador no soporta Web NFC');
                    if (!isSecure) issues.push('Usar HTTPS o localhost');
                    if (!isAndroid) issues.push('Se requiere Android');
                    if (!isChrome) issues.push('Se requiere Chrome');
                    
                    diagnostics += '<div class="nfc-data-item">' +
                        '<span class="nfc-data-label">Problemas:</span>' +
                        '<span class="nfc-data-value">' + issues.join(', ') + '</span>' +
                        '</div>';
                }
                
                diagnostics += '</div>';
                diagnosticResult.innerHTML = diagnostics;
                diagnosticResult.classList.add('show');
            });
        }

        // Manual input form handler
        const manualForm = document.getElementById('manual-input-form');
        if (manualForm) {
            manualForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const id = document.getElementById('manual-id').value;
                const name = document.getElementById('manual-name').value;
                const notes = document.getElementById('manual-notes').value;
                
                if (!id.trim()) {
                    alert('Por favor ingresa el ID de la tarjeta');
                    return;
                }
                
                const timestamp = new Date();
                const data = 'ID: ' + id + '\nNombre: ' + (name || 'No especificado') + '\nNotas: ' + (notes || 'Sin notas');
                
                displayNFCData(id, 'Entrada Manual', data, timestamp);
                
                // Clear form
                manualForm.reset();
                
                alert('✅ Datos guardados correctamente');
            });
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            checkNFCSupport();
            renderHistory();
            
            // Check device and browser
            const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
            const isAndroid = /Android/i.test(navigator.userAgent);
            const isChrome = /Chrome/i.test(navigator.userAgent) && !/Edge/i.test(navigator.userAgent);
            const isIOS = /iPhone|iPad|iPod/i.test(navigator.userAgent);
            
            // Detailed device detection
            if (isIOS) {
                showError('📱 <strong>Estás usando un iPhone/iPad</strong><br><br>' +
                    '❌ iOS <strong>NO permite</strong> el acceso a NFC desde navegadores de terceros.<br><br>' +
                    '<strong>Soluciones alternativas:</strong><br>' +
                    '• Usa un dispositivo Android con Chrome<br>' +
                    '• Implementa un lector NFC físico (módulo)<br>' +
                    '• Desarrolla una app nativa iOS<br>' +
                    '• Usa la entrada manual de abajo');
            } else if (!isMobile) {
                showError('📱 Esta función está diseñada para dispositivos móviles.<br>' +
                    'Por favor abre esta página en un teléfono o tablet Android con Chrome.');
            } else if (!isAndroid || !isChrome) {
                showError('🌐 Por favor usa <strong>Google Chrome</strong> para Android.<br>' +
                    'Otros navegadores no soportan Web NFC API.');
            }
        });

        // Search toggle (from original code)
        const searchToggle = document.querySelector('.search-toggle');
        const searchWrapper = document.querySelector('.search-input-wrapper');
        const searchClose = document.querySelector('.search-close');
        const searchInput = document.querySelector('.search-input');

        if (searchToggle) {
            searchToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                searchWrapper.classList.toggle('active');
                if (searchWrapper.classList.contains('active')) {
                    searchInput.focus();
                }
            });
        }

        if (searchClose) {
            searchClose.addEventListener('click', function() {
                searchWrapper.classList.remove('active');
            });
        }
    </script>
</body>
</html>

