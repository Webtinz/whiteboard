document.addEventListener("DOMContentLoaded", function (e) {
    scrollToBottom("chat-conversation-list", "chat-conversation");
});

var chatForm = document.querySelectorAll(".chatinput-form"),
    itemList = document.getElementById("chat-conversation-list"),
    singleitemList = document.getElementById("single-chat-list"),
    chatItems = [];

// Fonction pour obtenir la liste des chats
var getChatList = function (message, listId) {
    var time = (new Date()).toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });
    var listElement = document.getElementById(listId);

    listElement.insertAdjacentHTML("beforeend", `
        <li class="chat-list right">
            <div class="conversation-list">
                <div class="d-flex">
                    <div class="chat-user">
                        <img src="assets/images/users/avatar-10.jpg" class="avatar-sm img-fluid rounded-circle" alt="">
                    </div>
                    <div class="flex-1 chat-arrow">
                        <div class="d-flex justify-content-end">
                            <div class="ctext-wrap">
                                <p class="mb-0">${message}</p>
                            </div>
                            <div class="dropdown align-self-end">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                        <i class="mdi mdi-content-copy me-2"></i>Copy
                                    </a>
                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                        <i class="mdi mdi-star-outline me-2"></i>Star
                                    </a>
                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                        <i class="mdi mdi-reply-all-outline me-2"></i>Reply
                                    </a>
                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                        <i class="mdi mdi-share-all-outline me-2"></i>Forward
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item fw-medium text-danger delete-chat-item" href="javascript: void(0);">
                                        <i class="mdi mdi-trash-can-outline me-2"></i>Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                            Jansh Wells <small class="chat-time text-muted fw-medium">${time}</small>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    `);

    // Gérer la suppression des chats
    listElement.querySelectorAll(".chat-list").forEach(function (chatItem) {
        chatItem.querySelectorAll(".delete-chat-item").forEach(function (deleteBtn) {
            deleteBtn.addEventListener("click", function () {
                listElement.removeChild(chatItem);
            });
        });
    });
};

// Ajout des événements pour la suppression dans la liste de chat
itemList.querySelectorAll(".chat-list").forEach(function (chatItem) {
    chatItem.querySelectorAll(".delete-chat-item").forEach(function (deleteBtn) {
        deleteBtn.addEventListener("click", function () {
            itemList.removeChild(chatItem);
        });
    });
});

// Gestion des listes de chat individuel
var singlechatlist = singleitemList.querySelectorAll(".chat-list").forEach(function (chatItem) {
    chatItem.querySelectorAll(".delete-chat-item").forEach(function (deleteBtn) {
        deleteBtn.addEventListener("click", function () {
            singleitemList.removeChild(chatItem);
        });
    });
});

// Fonction pour faire défiler jusqu'en bas de la liste de chats
function scrollToBottom(listId, wrapperId) {
    var wrapperElement = document.querySelector("#" + wrapperId + " .simplebar-content-wrapper");
    var scrollPosition = document.getElementById(listId) ? document.getElementById(listId).scrollHeight - window.innerHeight + 450 : 0;

    if (scrollPosition) {
        wrapperElement.scrollTo({
            top: scrollPosition,
            behavior: "smooth"
        });
    }
}

// Fonction de recherche dans les conversations de chat
function searchChat() {
    var searchValue = document.getElementById("search-chat").value.toLowerCase();
    var chatItems = document.getElementById("all-chat").querySelectorAll("li");

    chatItems.forEach(function (item) {
        var chatText = item.querySelector(".ms-3").textContent || item.querySelector(".ms-3").innerText;
        if (chatText.toLowerCase().indexOf(searchValue) > -1) {
            item.style.display = "";
        } else {
            item.style.display = "none";
        }
    });
}

// Gérer l'envoi des messages
chatForm && chatForm.forEach(function (form) {
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        var formId = form.getAttribute("data-id"),
            message = form.querySelector(".chat-input").value;

        if (message.length !== 0) {
            getChatList(message, formId);
            scrollToBottom(formId, formId === "chat-conversation-list" ? "chat-conversation" : "single-chat-conversation");
        }

        form.querySelector(".chat-input").value = "";
    });
});

// Gestion des chats de groupe
document.querySelectorAll(".group-chat").forEach(function (groupChat) {
    groupChat.querySelectorAll("ul li").forEach(function (chatItem) {
        chatItem.addEventListener("click", function () {
            var activeItems = document.querySelectorAll("li.active");
            activeItems.forEach(function (activeItem) {
                activeItem.classList.remove("active");
            });

            chatItem.classList.add("active");

            var chatText = chatItem.querySelector(".chat-text").innerText;
            document.querySelector(".chat-title-text").innerHTML = chatText;

            var avatarTitle = chatItem.querySelector(".avatar-title").innerHTML;
            document.querySelector(".avatar-icon").innerHTML = avatarTitle;

            document.getElementById("group-chat-conversation").classList.add("d-block");
            document.getElementById("user-chat-conversation").classList.add("d-none");
            document.getElementById("group-chat-conversation").classList.remove("d-none");
            document.getElementById("user-chat-conversation").classList.remove("d-block");
        });
    });
});

// Gestion des chats individuels
document.querySelectorAll("ul.single-chat li").forEach(function (chatItem) {
    chatItem.addEventListener("click", function () {
        var activeItems = document.querySelectorAll("li.active");
        activeItems.forEach(function (activeItem) {
            activeItem.classList.remove("active");
        });

        chatItem.classList.add("active");

        var chatText = chatItem.querySelector(".chat-text").innerText;
        document.querySelector(".single-chat-title").innerHTML = chatText;

        var userImageSrc = chatItem.querySelector(".chat-user-img img").getAttribute("src");
        document.querySelector("#user-chat-conversation .single-chat-img").setAttribute("src", userImageSrc);

        var userImages = document.querySelectorAll("#single-chat-list .left .chat-user img");
        userImages.forEach(function (userImage) {
            userImage.setAttribute("src", userImageSrc);
        });

        document.getElementById("user-chat-conversation").classList.add("d-block");
        document.getElementById("group-chat-conversation").classList.add("d-none");
        document.getElementById("user-chat-conversation").classList.remove("d-none");
        document.getElementById("group-chat-conversation").classList.remove("d-block");

        scrollToBottom("single-chat-list", "single-chat-conversation");
    });
});
