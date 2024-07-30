document.addEventListener('DOMContentLoaded', () => {
    const currentPath = window.location.pathname.split('/').pop();
    const storedActiveLink = localStorage.getItem('activeLink');
    const storedTheme = localStorage.getItem('theme');

    
    function setActiveLink() {
        document.querySelectorAll('.navbar a').forEach(link => {
            if (link.getAttribute('href') === currentPath || link.getAttribute('href') === storedActiveLink) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }


    function applyTheme() {
        if (storedTheme === 'dark') {
            document.getElementById("body").style.backgroundColor = '#3e3e42';
            document.querySelectorAll('.navbar a').forEach(link => {
                if (link.getAttribute('href') === localStorage.getItem('activeLink')) {
                    link.classList.add('active');
                }
            });
        } else {
            document.getElementById("body").style.backgroundColor = 'azure';
        }
    }

    setActiveLink();
    applyTheme();

    document.querySelectorAll('.navbar a').forEach(link => {
        link.addEventListener('click', function() {
            localStorage.setItem('activeLink', this.getAttribute('href'));
            setActiveLink();
        });
    });
});

function dark() {
    document.getElementById("body").style.backgroundColor = '#3e3e42';
    document.getElementById("body").style.color = 'white';
    localStorage.setItem('theme', 'dark');
    document.querySelectorAll('.navbar a').forEach(link => {
        if (link.getAttribute('href') === localStorage.getItem('activeLink')) {
            link.classList.add('active');
        }
    });
}

function light() {
    document.getElementById("body").style.backgroundColor = 'azure';
    document.getElementById("body").style.color = 'black';  
    localStorage.setItem('theme', 'light');
    document.querySelectorAll('.navbar a').forEach(link => {
        if (link.getAttribute('href') === localStorage.getItem('activeLink')) {
            link.classList.add('active');
        }
    });
}
