import { escapeHtml, errorDisplay } from "./../../global/formValida.js";

const form = document.getElementById("contact-form");
const inputs = document.querySelectorAll("input");
const inputMessage = document.querySelector("textarea");

let name, email, message;

// foreach input call function
inputs.forEach((input) => {
    input.addEventListener("input", (e) => {
        switch (e.target.id) {
            case "name":
                namecheck(e.target.value);
                break;

            case "email":
                emailcheck(e.target.value);
                break;

            default:
                break;
        }
    });
});

//verify username
const namecheck = (value) => {
    if (!value.match(/^[^\d()<>\[\]\\/!?@#$%&*+¤="£|²:§;,_]+$/)) {
        errorDisplay("name", "Caractères non autorisés détectés.");
        name = null;
    } else {
        errorDisplay("name", "", true);
        name = value;
    }
};

//verify email
const emailcheck = (value) => {
    // verify if email format is correct
    if (
        !value.match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
        )
    ) {
        errorDisplay("email", "L’adresse e-mail n’est pas valide.");
        email = null;
    } else {
        errorDisplay("email", "", true);
        email = value;
    }
};

const messagecheck = (value) => {
    if (value.length > 3000) {
        errorDisplay("Form", "Le message est trop long (3000 caractères max).");
        message = null;
    } else if (value.length < 5) {
        errorDisplay(
            "Form",
            "otre message est un peu court, dites-m'en plus !",
        );
        message = null;
    } else {
        errorDisplay("Form", "", true);
        message = value;
    }
};

inputMessage.addEventListener("input", (e) => {
    messagecheck(e.target.value);
});

// submit form
form.addEventListener("submit", async (e) => {
    e.preventDefault();

    if (name && email && message) {
        errorDisplay("Form", "", true);

        let dataToSend = new FormData();

        dataToSend.append("name", escapeHtml(name));
        dataToSend.append("email", escapeHtml(email));
        dataToSend.append("message", escapeHtml(message));

        try {
            const resp = await fetch(form.action, {
                method: "POST",
                headers: { Accept: "application/json" },
                body: dataToSend,
            });

            if (resp.ok) {
                errorDisplay("succes", "Message envoyé avec succès !");

                setTimeout(() => {
                    form.reset();
                }, 1000);
            } else {
                errorDisplay(
                    "Form",
                    "Oups ! Le message n'a pas pu partir. Pouvez-vous réessayer dans un instant ?",
                );
            }
        } catch (error) {
            alert(
                `Oups ! Le message n'a pas pu partir. Pouvez-vous réessayer dans un instant ?`,
            );
        }
    } else {
        errorDisplay("Form", "Veuillez remplir tous les champs.");
    }
});
