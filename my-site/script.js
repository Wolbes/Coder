const texts = {
    ru: {
        title: "Привет",
        link: "Мой сайт",
        colNum: "№",
        colName: "Имя",
        name1: "Арсений",
        name2: "Алексей",
        name3: "Мария"
    },
    fr: {
        title: "Bonjour",
        link: "Mon site",
        colNum: "N°",
        colName: "Nom",
        name1: "Arseni",
        name2: "Alexey",
        name3: "Marie"
    }
};

function setLang(lang) {
    document.documentElement.lang = lang;

    document.getElementById("title").textContent   = texts[lang].title;
    document.getElementById("linkBtn").textContent = texts[lang].link;
    document.getElementById("colNum").textContent  = texts[lang].colNum;
    document.getElementById("colName").textContent = texts[lang].colName;
    document.getElementById("name1").textContent   = texts[lang].name1;
    document.getElementById("name2").textContent   = texts[lang].name2;
    document.getElementById("name3").textContent   = texts[lang].name3;
}
