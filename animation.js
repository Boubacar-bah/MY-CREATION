    const ratio = .1;
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: ratio
    }
    const handleItersect = function(entries, observer) {
        entries.forEach(function (entry) {
            if (entry.intersectionRatio > ratio) {
                entry.target.classList.add('reveal-visible')
            } else {
                entry.target.classList.remove('reveal-visible')
            }
        })
    }
    const observer = new IntersectionObserver(handleItersect, options);
    document.querySelectorAll('.reveal').forEach(function (r) {
        observer.observe(r)
    })

{
    function hideIt() {
        document.getElementById('searchField').style.display = "none";
    }
    function mySearch() {
        document.getElementById('searchField').style.display = "block";
        let input, filter, ul, li, a, i;
        input = document.getElementById('finder');
        filter = input.value.toUpperCase();
        ul = document.getElementById("searchField");
        li = ul.getElementsByTagName('li');
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName('a')[0];
            if (a.innerHTML.toUpperCase().includes(filter)) {
                li[i].style.display = "block";
            } else {
                li[i].style.display = "none";
            }
        }
        if (input.value.length == 0) {
            ul.style.display = "none";
        } else {
            ul.display = "block";
        }
    }
}