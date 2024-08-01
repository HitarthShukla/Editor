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

        if (theme === 'dark') {
            body.classList.add('dark-theme');
        } else if (theme === 'neon') {
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
    document.querySelector('.dropdown-content-appearance a[onclick="dark()"]').addEventListener('click', () => applyTheme('dark'));
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
});

function dark() {
    applyTheme('dark');
}

function light() {
    applyTheme('light');
}

function neon() {
    applyTheme('neon');
}
