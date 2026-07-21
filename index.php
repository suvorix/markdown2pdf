<!DOCTYPE html>
<html lang="ru" data-theme="light">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Онлайн конвертер Markdown в PDF | Редактор с превью в реальном времени</title>
    <meta name="description" content="md2pdf - онлайн редактор Markdown с функцией экспорта в PDF. Создавайте красивые документы, инструкции и резюме с мгновенным превью. Бесплатно и без регистрации.">

    <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="md2pdf" />
    <link rel="yandex-tableau-widget" href="/favicon/yandex-tableau-widget.json">
    <link rel="manifest" href="/favicon/site.webmanifest" />

    <script src="/js/marked.min.js"></script>
    <link rel="stylesheet" href="/fonts/SegoeUI/stylesheet.css" />
    <link rel="stylesheet" href="/css/github-markdown.min.css"/>
    <link rel="stylesheet" href="/css/github.min.css"/>
    <link rel="stylesheet" href="/css/style.css"/>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m,e,t,r,i,k,a){
            m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
        })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=110811055', 'ym');

        ym(110811055, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/110811055" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
    <div class="app-wrapper">
        <div class="app-sidebar">
            <div class="app-logo">
                <img src="/images/logo.svg" width="120" alt="Логотип md2pdf"/>
            </div>
            <div>
                <button id="addNewDocument">Новый документ</button>
            </div>
            <div class="app-history" id="documentList">
                <div class="document-item">
                    <div class="document-name loadding">&nbsp;</div>
                </div>
                <div class="document-item">
                    <div class="document-name loadding">&nbsp;</div>
                </div>
                <div class="document-item">
                    <div class="document-name loadding">&nbsp;</div>
                </div>
                <div class="document-item">
                    <div class="document-name loadding">&nbsp;</div>
                </div>
                <div class="document-item">
                    <div class="document-name loadding">&nbsp;</div>
                </div>
            </div>
            <div class="app-footer">
                &copy; <?=date('Y')?>&nbsp;&nbsp;<a href="https://suvorix.ru/" target="_blank">SUVORIX</a>&nbsp;&nbsp;<span style="color: #e3e3e3">|</span>&nbsp;&nbsp;<a href="https://github.com/suvorix/markdown2pdf" target="_blank">GitHub</a>
            </div>
        </div>
        <div class="app-content">
            <div class="header">
                <div class="doc_name">
                    <p>Название документа</p>
                    <input type="text" name="file-title" id="fileTitleInput" value="Markdown в PDF" />
                </div>
                <button id="downloadPdf">
                    <span class="loader" style="display: none;"><svg style="margin-bottom: -2px; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><circle cx="12" cy="2" r="0" fill="currentColor"><animate attributeName="r" begin="0" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0"/></circle><circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(45 12 12)"><animate attributeName="r" begin="0.125s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0"/></circle><circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(90 12 12)"><animate attributeName="r" begin="0.25s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0"/></circle><circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(135 12 12)"><animate attributeName="r" begin="0.375s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0"/></circle><circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(180 12 12)"><animate attributeName="r" begin="0.5s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0"/></circle><circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(225 12 12)"><animate attributeName="r" begin="0.625s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0"/></circle><circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(270 12 12)"><animate attributeName="r" begin="0.75s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0"/></circle><circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(315 12 12)"><animate attributeName="r" begin="0.875s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0"/></circle></svg></span>
                    <span>Экспортировать</span>
                </button>
            </div>
            <div class="container">
                <div class="editor">
                    <textarea id="markdownInput" placeholder="Введите Markdown..."># Привет мир! 👋

Добро пожаловать в интерактивный редактор Markdown с функцией экспорта в PDF. Создавайте красивые документы, инструкции и резюме с мгновенным превью. Бесплатно и без регистрации.

## Редактируй Markdown и сразу смотри результат в PDF

Инструмент совмещает простой редактор и наглядную визуализацию. Пишите контент в левой панели и наблюдайте за его финальным видом в правой части экрана.

**Ключевые возможности:**
- **Markdown разметка** — поддержка заголовков, жирного текста, списков, цитат и вставки кода.
- **Живое превью** — моментальное отображение изменений в формате PDF-страницы.
- **Чистый экспорт** — скачивание готового файла без лишних водяных знаков и рекламы.


## Для чего подходит этот PDF конструктор?

Этот сервис решает задачи бизнес-пользователей, фрилансеров и студентов. Он идеален для:

- 📄 **Создания резюме** — чистый минималистичный дизайн, который нравится рекрутерам.
- 📚 **Написания технической документации** — понятное отображение кода и структурированных данных.
- 📝 **Оформления отчётов и проектов** — быстрый экспорт готовой работы в общепринятый PDF формат.
- ✍️ **Ведения заметок** — превращайте наброски в опрятные цифровые файлы.

## Преимущества этого конвертера Markdown в PDF 

- ⚡ **Мгновенная синхронизация** — печатайте текст и сразу оценивайте верстку. Это экономит время на правках.
- 🎯 **Идеальный экспорт** — конвертер сохраняет структуру заголовков и форматирование, чтобы ваш документ выглядел профессионально.
- 🔓 **Полностью бесплатно** — никаких скрытых платежей, ограничений по количеству символов или файлов.
- 🖥️ **Работает в браузере** — не требует установки программ или дополнительных расширений.

## Как создать PDF из Markdown за 30 секунд?

1. Введи или вставь текст в левое окно.
2. Проверь внешний вид в правом окне превью.
3. Нажми кнопку «Экспортировать» и сохрани готовый PDF на устройство.

**Начни работу прямо сейчас** — это просто, быстро и доступно каждому!

> *«Простота — это высшая сложность»*  
> Наслаждайся процессом создания безупречных документов ✍️🔥
</textarea>
                </div>
                <div class="preview">
                    <div class="markdown-body" id="previewContent"></div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="/js/DocumentManager.js"></script>

    <script>
        (function(){
            // Инициализация
            const markdownInput = document.getElementById('markdownInput');
            const previewContent = document.getElementById('previewContent');
            const fileTitleInput = document.getElementById('fileTitleInput');
            const documentListEl = document.getElementById('documentList');
            const addNewBtn = document.getElementById('addNewDocument');

            // Настройка marked.js для GitHub-like преобразования
            marked.setOptions({
                gfm: true,
                breaks: true,
                headerIds: true,
                headerPrefix: '',
                langPrefix: 'language-',
                mangle: false,
                sanitize: false,
                silent: false,
                smartypants: false,
                xhtml: false
            });

            // Функция обновления предпросмотра
            function updatePreview() {
                const markdownText = markdownInput.value;
                previewContent.innerHTML = marked.parse(markdownText);
                document.querySelectorAll('pre code').forEach((block) => {
                    hljs.highlightBlock(block);
                });
            }

            updatePreview();
            markdownInput.addEventListener('input', updatePreview);

            var downloadPdfBtn = document.getElementById('downloadPdf');
            downloadPdfBtn.addEventListener('click', function() {
                downloadPdfBtn.disabled = true;

                var loader = downloadPdfBtn.querySelector('.loader');
                loader.style.display = 'inline';

                // Получаем значение для нового заголовка
                var fileName = document.querySelector('[name="file-title"]').value;
                
                var html = '';
                var previewContent = document.getElementById('previewContent');
                if (previewContent) {
                    html = previewContent.outerHTML;
                }
                
                // Отправляем POST запрос на сервер
                fetch('/pdf.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ 
                        html: html,
                        name: fileName
                    })
                })
                .then(function(response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.blob();
                })
                .then(function(blob) {
                    // Создаем ссылку для скачивания PDF
                    var url = window.URL.createObjectURL(blob);
                    var link = document.createElement('a');
                    link.href = url;
                    link.download = fileName + '.pdf';
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                    window.URL.revokeObjectURL(url);

                    downloadPdfBtn.disabled = false;
                    loader.style.display = 'none';
                })
                .catch(function(error) {
                    console.error('Ошибка при генерации PDF через сервер:', error);
                    // Если запрос не удался, используем резервный вариант через печать страницы
                    var currentTitle = document.title;
                    document.title = fileName;
                    window.print();
                    document.title = currentTitle;

                    downloadPdfBtn.disabled = false;
                    loader.style.display = 'none';
                });
            });

            const docManager = new DocumentManager();

            // Загрузка документа по id
            function loadDocument(id) {
                const doc = docManager.getById(id);
                if (!doc) return;
                docManager.setCurrentId(id);
                markdownInput.value = doc.md;
                fileTitleInput.value = doc.name;
                updatePreview(doc.md);
                renderDocumentList();
            }

            // Рендер списка документов
            function renderDocumentList() {
                const docs = docManager.getAll();
                const currentId = docManager.getCurrentId();
                documentListEl.innerHTML = '';
                docs.forEach(doc => {
                    const item = document.createElement('div');
                    item.className = 'document-item' + (currentId === doc.id ? ' active' : '');
                    item.dataset.id = doc.id;

                    const nameDiv = document.createElement('div');
                    nameDiv.className = 'document-name';
                    nameDiv.textContent = doc.name || 'Без названия';
                    nameDiv.title = doc.name || 'Без названия';

                    const deleteBtn = document.createElement('div');
                    deleteBtn.className = 'document-delete-btn';
                    deleteBtn.title = 'Удалить документ';

                    item.appendChild(nameDiv);
                    item.appendChild(deleteBtn);
                    documentListEl.appendChild(item);

                    // Обработчик клика по имени — загрузить документ
                    nameDiv.addEventListener('click', function(e) {
                        e.stopPropagation();
                        const id = Number(item.dataset.id);
                        loadDocument(id);
                    });

                    // Обработчик удаления
                    deleteBtn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        const id = Number(item.dataset.id);
                        if (docManager.getAll().length <= 1) {
                            alert('Нельзя удалить единственный документ.');
                            return;
                        }
                        if (confirm(`Удалить документ "${doc.name || 'Без названия'}"?`)) {
                            docManager.deleteDocument(id);
                            const remaining = docManager.getAll();
                            if (remaining.length > 0) {
                                // Если удалили текущий, загружаем первый
                                if (docManager.getCurrentId() === id) {
                                    loadDocument(remaining[0].id);
                                } else {
                                    renderDocumentList();
                                }
                            } else {
                                // Создаём дефолтный (на всякий случай)
                                const newDoc = docManager.addDocument('Новый документ', '# Введите ваш Markdown...');
                                loadDocument(newDoc.id);
                            }
                        }
                    });
                });
            }

            // Обработчик изменения текста в редакторе — автосохранение
            markdownInput.addEventListener('input', function() {
                const currentId = docManager.getCurrentId();
                if (currentId) {
                    const md = markdownInput.value;
                    const name = fileTitleInput.value || 'Без названия';
                    docManager.updateDocument(currentId, { md, name });
                    updatePreview(md);
                    // Обновляем только имя в списке, без перерисовки всего списка
                    const items = documentListEl.querySelectorAll('.document-item');
                    items.forEach(el => {
                        if (Number(el.dataset.id) === currentId) {
                            const nameDiv = el.querySelector('.document-name');
                            if (nameDiv) nameDiv.textContent = name;
                        }
                    });
                }
            });

            // Сохранять название при изменении
            fileTitleInput.addEventListener('change', function() {
                const currentId = docManager.getCurrentId();
                if (currentId) {
                    const name = fileTitleInput.value || 'Без названия';
                    docManager.updateDocument(currentId, { name });
                    renderDocumentList();
                }
            });

            // Добавление нового документа
            addNewBtn.addEventListener('click', function() {
                const newDoc = docManager.addDocument('Новый документ', '# Введите ваш Markdown...');
                loadDocument(newDoc.id);
                markdownInput.focus();
                markdownInput.setSelectionRange(0, 0);
            });

            // Инициализация: загружаем первый документ
            const allDocs = docManager.getAll();
            if (allDocs.length > 0) {
                loadDocument(allDocs[0].id);
            } else {
                const newDoc = docManager.addDocument('Markdown в PDF', '# Привет мир! 👋');
                loadDocument(newDoc.id);
            }
        })();
    </script>

    <script src="/js/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
</body>
</html>