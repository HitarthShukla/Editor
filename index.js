document.addEventListener('DOMContentLoaded', () => {
    const currentPath = window.location.pathname.split('/').pop();

    function setActiveLink() {
        document.querySelectorAll('.navbar a').forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    function removeThemeClasses() {
        const body = document.getElementById("body");
        const navbar = document.querySelector('.navbar');
        const navLinks = document.querySelectorAll('.nav-links a');

        body.className = '';
        navbar.className = 'navbar';
        navLinks.forEach(link => {
            link.classList.remove('neon-nav-links', 'neon-active');
        });
    }

    function applyTheme(theme) {
        const body = document.getElementById("body");
        const navbar = document.querySelector('.navbar');
        const navLinks = document.querySelectorAll('.nav-links a');

        removeThemeClasses();

        if (theme === 'neon') {
            body.classList.add('neon-theme');
            navbar.classList.add('neon-navbar');
            navLinks.forEach(link => {
                link.classList.add('neon-nav-links');
                if (link.classList.contains('active')) {
                    link.classList.add('neon-active');
                }
            });
        } else {
            body.classList.add('light-theme');
        }

        localStorage.setItem('theme', theme);
    }

    function loadTheme() {
        const savedTheme = localStorage.getItem('theme') || 'light';
        applyTheme(savedTheme);
    }

    setActiveLink();
    loadTheme();

    document.querySelectorAll('.navbar a').forEach(link => {
        link.addEventListener('click', function() {
            setActiveLink();
        });
    });

    document.querySelector('.dropdown-content-appearance a[onclick="light()"]').addEventListener('click', () => applyTheme('light'));
    document.querySelector('.dropdown-content-appearance a[onclick="neon()"]').addEventListener('click', () => applyTheme('neon'));
    const textarea = document.getElementById('html-code');

    textarea.addEventListener('keydown', function(event) {
        if (event.key === 'Enter' && textarea.value[textarea.selectionStart - 1] === '!') {
            const boilerplate = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
            `;
            event.preventDefault();
            const start = textarea.selectionStart - 1; 
            const end = textarea.selectionEnd;
            textarea.value = textarea.value.substring(0, start) + boilerplate + textarea.value.substring(end);
            textarea.selectionStart = textarea.selectionEnd = start + boilerplate.length;
        }
    });
    document.querySelectorAll('.copy-link').forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const targetId = link.getAttribute('data-target');
            const textarea = document.getElementById(targetId);
            textarea.select();
            document.execCommand('copy');
            link.textContent = 'Copied';
            window.getSelection().removeAllRanges();

            setTimeout(() => {
                link.textContent = 'Copy';
            }, 3000);
        });
    });
    document.querySelectorAll('.paste-link').forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const targetId = link.getAttribute('data-target');
            const textarea = document.getElementById(targetId);

            navigator.clipboard.readText().then(text => {
                const start = textarea.selectionStart;
                const end = textarea.selectionEnd;
                textarea.value = textarea.value.substring(0, start) + text + textarea.value.substring(end);
                textarea.selectionStart = textarea.selectionEnd = start + text.length;
            });
        });
    });
});
function light() {
    applyTheme('light');
}
function neon() {
    applyTheme('neon');
}
function run() {
    let htmlCode = document.getElementById("html-code").value;
    let cssCode = document.getElementById("css-code").value;
    let jsCode = document.getElementById("js-code").value;
    let output = document.getElementById("output");
    output.contentDocument.body.innerHTML = htmlCode + "<style>" + cssCode +"</style>";
    output.contentWindow.eval(jsCode);
}
const htmllogo = document.getElementById("html-logo");
const csslogo = document.getElementById("css-logo");
const jslogo = document.getElementById("js-logo");
const htmlcode = document.getElementById("html-code");
const csscode = document.getElementById("css-code");
const jscode = document.getElementById("js-code");
var hclicks  = 0;
var cclicks  = 0;
var jclicks  = 0;
function ochtml() {
    hclicks +=1;
    if (hclicks%2 === 1) {
        htmllogo.classList.add('graycolor');
        htmlcode.style.display = "none";
    }
    else {
        htmllogo.classList.remove('graycolor');
        htmlcode.style.display = "inline";
    }
}
function occss() {
    cclicks +=1;
    if (cclicks%2 === 1) {
        csslogo.classList.add('graycolor');
        csscode.style.display = "none";
    }
    else {
        csslogo.classList.remove('graycolor');
        csscode.style.display = "inline";
    }
}
function ocjs() {
    jclicks +=1;
    if (jclicks%2 === 1) {
        jslogo.classList.add('graycolor');
        jscode.style.display = "none";
    }
    else {
        jslogo.classList.remove('graycolor');
        jscode.style.display = "inline";
    }
}




