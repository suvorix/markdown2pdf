class DocumentManager {
    constructor(storageKey = 'md2pdf_document') {
        this.storageKey = storageKey;
        this.documents = this.loadDocuments();
        this.currentId = null;
    }

    loadDocuments() {
        const raw = localStorage.getItem(this.storageKey);
        if (raw) {
            try {
                return JSON.parse(raw);
            } catch (e) {
                return this.getDefaultDocuments();
            }
        }
        return this.getDefaultDocuments();
    }

    getDefaultDocuments() {
        const defaultMd = `# Привет мир! 👋

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
> Наслаждайся процессом создания безупречных документов ✍️🔥`;
        return [{
            id: Date.now(),
            name: 'Markdown в PDF',
            timestamp_update: Date.now(),
            md: defaultMd
        }];
    }

    saveDocuments() {
        localStorage.setItem(this.storageKey, JSON.stringify(this.documents));
    }

    getAll() {
        return [...this.documents].sort((a,b) => b.timestamp_update - a.timestamp_update);
    }

    getById(id) {
        return this.documents.find(d => d.id === id) || null;
    }

    addDocument(name, md = '') {
        const newDoc = {
            id: Date.now(),
            name: name || 'Новый документ',
            timestamp_update: Date.now(),
            md: md || '# Введите ваш Markdown...'
        };
        this.documents.push(newDoc);
        this.saveDocuments();
        return newDoc;
    }

    updateDocument(id, updates) {
        const doc = this.getById(id);
        if (doc) {
            Object.assign(doc, updates, { timestamp_update: Date.now() });
            this.saveDocuments();
            return doc;
        }
        return null;
    }

    deleteDocument(id) {
        this.documents = this.documents.filter(d => d.id !== id);
        this.saveDocuments();
    }

    setCurrentId(id) {
        this.currentId = id;
    }

    getCurrentId() {
        return this.currentId;
    }
}