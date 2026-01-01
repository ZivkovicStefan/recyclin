<footer class="site-footer">
    <div class="footer-inner">

        <!-- LEFT -->
        <div class="footer-col">
            <h3>RECYCLIN</h3>
            <p>
                Otkup sekundarnih sirovina<br>
                Žabari i okolina
            </p>
        </div>

        <!-- CENTER -->
        <div class="footer-col">
            <h4>Kontakt</h4>
            <p>📞 <a href="tel:+381693100977">+381 69 31 00 977</a></p>
            <p>✉️ <a href="mailto:stefanotpad91@gmail.com">stefanotpad91@gmail.com</a></p>
            <p>📍 Miroslava Ivkovića 40<br>12374 Žabari</p>
        </div>

        <!-- RIGHT -->
        <div class="footer-col">
            <h4>Podaci o firmi</h4>
            <p>
                Stefan Živković pr RECYCLIN<br>
                PIB: 113169693<br>
                MB: 66627578
            </p>
        </div>

    </div>

    <div class="footer-bottom">
        © <?php echo date("Y"); ?> RECYCLIN · Sva prava zadržana
    </div>
</footer>

<div class="nav-overlay"></div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const currentPage = window.location.pathname.split("/").pop();

    document.querySelectorAll(".main-nav a").forEach(link => {
        const href = link.getAttribute("href");

        if (!href || href.startsWith("tel:")) return;

        if (currentPage === "" && href === "index.php") {
            link.classList.add("active");
        }

        if (href === currentPage) {
            link.classList.add("active");
        }
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const navToggle = document.getElementById("navToggle");
    const nav = document.querySelector(".main-nav");
    const overlay = document.getElementById("navOverlay");

    navToggle.addEventListener("click", () => {
        nav.classList.toggle("open");
        overlay.classList.toggle("active");
    });

    overlay.addEventListener("click", () => {
        nav.classList.remove("open");
        overlay.classList.remove("active");
    });
});
</script>


