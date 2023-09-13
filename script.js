        // JavaScript to handle form toggle
        const form1 = document.getElementById("form1");
        const form2 = document.getElementById("form2");
        const form1Content = document.getElementById("form1-content");
        const form2Content = document.getElementById("form2-content");

        form1.addEventListener("change", () => {
            form1Content.style.display = "block";
            form2Content.style.display = "none";
        });

        form2.addEventListener("change", () => {
            form1Content.style.display = "none";
            form2Content.style.display = "block";
        });