<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizador de PDF</title>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        #pdf-viewer {
            width: 100%;
            height: 90vh;
            border: 1px solid #ccc;
            background-color: #fff;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: auto;
            /* Asegura que el contenido se puede desplazar si es más grande que el contenedor */
        }

        canvas {
            max-width: 100%;
            max-height: 100%;
        }

        .controls {
            text-align: center;
            margin-top: 10px;
        }

        .controls button {
            padding: 10px 20px;
            margin: 5px;
            font-size: 16px;
            cursor: pointer;
            background-color: #06090c;
            color: #e6bf77;
            border: none;
            border-radius: 5px;
        }

        .controls button:hover {
            background-color: #06090c;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #06090c;
            color: #fff;
        }

        .header button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #fff;
            color: #b38125;
            border: none;
            border-radius: 5px;
        }

        .header button:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <!-- Header con botones de regresar y descargar -->
    <div class="header">
        <button onclick="goBack()">Regresar</button>
        <button onclick="downloadPdf()">Descargar PDF</button>
    </div>

    <!-- Controles de navegación del PDF -->
    <div class="controls">
        <button onclick="prevPage()">Anterior</button>
        <button onclick="nextPage()">Siguiente</button>
        <span id="page-num"></span> / <span id="page-count"></span>
    </div>

    <!-- Contenedor del visor de PDF -->
    <div id="pdf-viewer"></div>

    <script>
        // URL del PDF
        const pdfUrl = "{{ asset('assets/files/' . $file) }}";

        // Variables globales para el PDF
        let pdfDoc = null;
        let pageNum = 1;
        let pageRendering = false;
        let pageNumPending = null;
        const scale = 2;

        // Función para renderizar una página
        function renderPage(num) {
            pageRendering = true;
            pdfDoc.getPage(num).then((page) => {
                const viewport = page.getViewport({
                    scale
                });
                const canvas = document.createElement('canvas');
                const context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Limpiar el contenedor y agregar el canvas
                const pdfViewer = document.getElementById('pdf-viewer');
                pdfViewer.innerHTML = '';
                pdfViewer.appendChild(canvas);

                // Renderizar la página en el canvas
                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                page.render(renderContext).promise.then(() => {
                    pageRendering = false;
                    if (pageNumPending !== null) {
                        renderPage(pageNumPending);
                        pageNumPending = null;
                    }
                });

                // Actualizar el número de página
                document.getElementById('page-num').textContent = num;
            });
        }

        // Función para cargar el PDF
        function loadPdf(url) {
            pdfjsLib.getDocument(url).promise.then((pdfDoc_) => {
                pdfDoc = pdfDoc_;
                document.getElementById('page-count').textContent = pdfDoc.numPages;
                renderPage(pageNum);
            });
        }

        // Función para ir a la página anterior
        function prevPage() {
            if (pageNum <= 1) return;
            pageNum--;
            if (!pageRendering) {
                renderPage(pageNum);
            } else {
                pageNumPending = pageNum;
            }
        }

        // Función para ir a la página siguiente
        function nextPage() {
            if (pageNum >= pdfDoc.numPages) return;
            pageNum++;
            if (!pageRendering) {
                renderPage(pageNum);
            } else {
                pageNumPending = pageNum;
            }
        }

        // Función para regresar a la vista anterior
        function goBack() {
            window.history.back();
        }

        // Función para descargar el PDF
        function downloadPdf() {
            const link = document.createElement('a');
            link.href = pdfUrl;
            link.download = "{{ $file }}"; // Nombre del archivo al descargar
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        // Cargar el PDF al iniciar la página
        window.onload = () => {
            loadPdf(pdfUrl);
        };
    </script>
</body>

</html>
