<script>
    function updateFormAction(groupId) {
        var forms = document.getElementsByClassName('add-user-to-group');

        // Boucle sur chaque formulaire et mise à jour de l'attribut action
        Array.prototype.forEach.call(forms, function(form) {
            form.action = `/groups/${groupId}/add-member`;
        });
        
        var formsDelete = document.getElementsByClassName('delete-user-from-group');

        // Boucle sur chaque formulaire et mise à jour de l'attribut action
        Array.prototype.forEach.call(formsDelete, function(formDelete) {
            formDelete.action = `/groups/${groupId}/remove-member`;
        });
    }    
    // Appel de la fonction avec un groupId dynamique (par exemple)
    updateFormAction(groupId); // Change 1 par groupId
</script>

{{-- Add/Remove Group Members --}}
{{-- <script>
    $(document).ready(function() {
        // Gérer la soumission du formulaire "add-user-to-group" sans rechargement
        $(".add-user-to-group").off("submit").on("submit", function(e) {
            e.preventDefault(); // Empêche le rechargement de la page
            var form = $(this);
            $.ajax({
                url: form.attr("action"),
                type: form.attr("method"),
                data: form.serialize(),
                success: function(response) {
                    // Traiter la réponse du serveur (par exemple, mettre à jour la liste des membres)
                    // console.log("User added:", response);
                    alert("User added");
                },
                error: function(error) {
                    console.error("Error adding user:", error);
                    alert("An error occurred. Please try again.");
                }
            });
        });

        // Gérer la soumission du formulaire "delete-user-from-group" sans rechargement
        $(".delete-user-from-group").off("submit").on("submit", function(e) {
            e.preventDefault(); // Empêche le rechargement de la page
            var form = $(this);
            $.ajax({
                url: form.attr("action"),
                type: form.attr("method"),
                data: form.serialize(),
                success: function(response) {
                    // Traiter la réponse du serveur (par exemple, mettre à jour la liste des membres)
                    // console.log("User removed:", response);
                    alert("User removed");
                },
                error: function(error) {
                    console.error("Error removing user:", error);
                    alert("An error occurred. Please try again.");
                }
            });
        });
    });
</script> --}}
<script>
    $(document).ready(function() {
        // Gérer la soumission du formulaire "add-user-to-group" sans rechargement
        $(".add-user-to-group").off("submit").on("submit", function(e) {
            e.preventDefault(); // Empêche le rechargement de la page
            var form = $(this);
            $.ajax({
                url: form.attr("action"),
                type: form.attr("method"),
                data: form.serialize(),
                success: function(response) {
                    // Mettre à jour la liste des membres
                    updateMemberList(response.members, response.groupId); // Assurez-vous que votre réponse contient ces données
                    alert("User added");
                },
                error: function(error) {
                    console.error("Error adding user:", error);
                    alert("An error occurred. Please try again.");
                }
            });
        });

        // Utiliser la délégation d'événements pour le formulaire de suppression
        $('#u-member-list').off("submit", ".delete-user-from-group").on("submit", ".delete-user-from-group", function(e) {
            e.preventDefault(); // Empêche le rechargement de la page
            var form = $(this);
            $.ajax({
                url: form.attr("action"),
                type: form.attr("method"),
                data: form.serialize(),
                success: function(response) {
                    // Mettre à jour la liste des membres
                    console.log(response);
                    
                    updateMemberList(response.members, response.groupId); // Assurez-vous que votre réponse contient ces données
                    alert("User removed");
                },
                error: function(error) {
                    console.error("Error removing user:", error);
                    alert("An error occurred. Please try again.");
                }
            });
        });
    });
</script>


{{-- File Input "Accept" attribute management --}}
<script>
    // Référence au champ input unique
    let fileInput = document.getElementById('fileInput');
    let preview = document.getElementById('preview'); // Conteneur d'aperçu

    // Gestion des clics pour chaque bouton
    document.getElementById('cameraBtn').addEventListener('click', function() {
        fileInput.accept = "image/*"; // Autoriser uniquement les images capturées par la caméra
        fileInput.capture = "camera"; // Activer la capture par la caméra
        fileInput.click();
    });

    document.getElementById('photosBtn').addEventListener('click', function() {
        fileInput.accept = "image/*"; // Autoriser uniquement les images
        fileInput.removeAttribute('capture');
        fileInput.click();
    });

    document.getElementById('audioBtn').addEventListener('click', function() {
        fileInput.accept = "audio/*"; // Autoriser uniquement les fichiers audio
        fileInput.removeAttribute('capture');
        fileInput.click();
    });

    document.getElementById('documentsBtn').addEventListener('click', function() {
        fileInput.accept = ".zip,.pdf,.doc,.docx,.txt,.xls,.xlsx,.ppt,.pptx,.txt"; // Documents autorisés
        fileInput.removeAttribute('capture');
        fileInput.click();
    });

    // Aperçu des fichiers sélectionnés
    fileInput.addEventListener('change', function(event) {
        preview.innerHTML = ''; // Effacer l'aperçu précédent
        let files = event.target.files;

        for (let i = 0; i < files.length; i++) {
            let file = files[i];
            let fileType = file.type;

            if (fileType.startsWith('image/')) {
                let img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                img.style.maxWidth = '150px'; // Ajustez la taille de l'aperçu
                img.style.marginRight = '10px';
                preview.appendChild(img);
            } 
            else if (fileType.startsWith('video/')) {
                let video = document.createElement('video');
                video.src = URL.createObjectURL(file);
                video.controls = true;
                video.style.maxWidth = '150px'; // Ajustez la taille de l'aperçu
                video.style.marginRight = '10px';
                preview.appendChild(video);
            } 
            else {
                let docIcon = document.createElement('span');
                docIcon.innerHTML = '📄'; // Icône pour les documents
                docIcon.style.fontSize = '50px';
                docIcon.style.marginRight = '10px';
                preview.appendChild(docIcon);
            }
        }
    });
</script>


{{-- Create Group form --}}
<script>
    $(document).ready(function () {
        // Intercepter la soumission du formulaire
        $("#createGroupForm").off("submit").on("submit", function (e) {
            e.preventDefault(); // Empêche le rechargement de la page

            // Récupérer les données du formulaire
            var formData = $(this).serialize(); // Sérialiser les données du formulaire

            // Envoyer la requête AJAX
            $.ajax({
                url: $(this).attr("action"), // Récupérer l'URL spécifiée dans l'attribut action du formulaire
                type: $(this).attr("method"), // Récupérer la méthode du formulaire (POST ou GET)
                data: formData,
                success: function (response) {
                    // Traiter la réponse du serveur
                    console.log(response); // Afficher la réponse dans la console
                    $("#groupList").html(response); // Mettre à jour uniquement la liste des groupes
                },
                error: function (error) {
                    // Gérer les erreurs
                    console.error(error);
                    alert("Une erreur s'est produite. Veuillez réessayer.");
                },
            });
        });
    });
</script>

{{-- Get Group member number --}}
<script>
    $(document).ready(function() {
        $('#group-member-number').on('click', function() {
            var groupId = $('#group_id').val(); // Récupérer l'ID du groupe sélectionné

            // Appeler une fonction pour récupérer les membres du groupe
            fetchGroupMembers(groupId);
        });
    });

    function fetchGroupMembers(groupId) {
        $.ajax({
            url: '/group-members/' + groupId, // Remplace avec l'URL de ton API
            type: 'GET', // ou 'POST' si nécessaire
            data: { group_id: groupId },
            success: function(response) {
                if (response.length > 0) {
                    // Remplacer le contenu de la liste avec les membres récupérés
                    updateMemberList(response,groupId);
                    // console.log(response);
                }
            },
            error: function(error) {
                console.error("Erreur lors de la récupération des membres :", error);
            }
        });
    }

    function updateMemberList(members,groupId) {
        var memberList = $('#u-member-list');
        memberList.empty(); // Vider la liste existante
        // /groups/${groupId}/remove-member
        members.forEach(function(member) {
            memberList.append(`
                <li class="chat-list">
                    <a href="javascript: void(0);" class="fw-medium d-block">
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="/assets/images/users/avatar-${member.id}.jpg" class="img-fluid avatar rounded" alt="">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="font-size-15 mb-1">${member.name}</h5>
                                <p class="text-muted font-size-13 mb-0">${member.role}</p>
                            </div>
                            <div>
                                <form action="/groups/${groupId}/remove-member" method="post" class="delete-user-from-group">
                                    @csrf
                                    <input type="hidden" name="user_id" value="${member.id}">
                                    <button type="submit" style="border: 0px !important; padding: 0px !important;background-color: #fff;">
                                        <i class="mdi mdi-delete"></i> Remove
                                    </button>
                                </form>
                            </div>
                        </div>
                    </a>
                </li>
            `);
        });

        // Mettre à jour le nombre de membres affiché
        $('#span-group-member-number').text(members.length);
    }

</script>

{{-- Hide Group member number span --}}
<script>
    $(document).ready(function() {
        // Cacher les éléments une fois la page chargée
        $('.default-display-none').hide();
    });
</script>

{{-- Hide Group member number span --}}
<script>
    $(document).ready(function() {
        // Écoute le clic sur les liens avec la classe 'chat-user-link'
        $('.chat-user-link').on('click', function() {

            var elements = document.getElementsByClassName('default-display-none');
            for (var i = 0; i < elements.length; i++) {
                elements[i].style.display = "block"; // Affiche les éléments masqués
            }
            // Récupérer l'ID de l'utilisateur sélectionné à partir de l'attribut data-user-id
            var userId = $(this).data('user-id');
            var userName = $(this).data('user-name');
            
            // Mettre à jour la valeur de l'input avec l'ID 'receiver_id'
            $('#receiver_id').val(userId);

            document.getElementById('chatName').innerHTML = userName;
            document.getElementById('group-member-number').style.display = "none";


            // Mettre à null la valeur de l'input du group avec l'ID 'group_id'
            $('#group_id').val(null);
        });
    });
</script>

{{-- Update Group member number --}}
<script>
    $(document).ready(function() {
    var elements = document.getElementsByClassName('default-display-none');
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.display = "block";
    }
        // Écoute le clic sur les liens avec la classe 'chat-group-link'
        $('.chat-group-link').on('click', function() {
            // Récupérer l'ID du groupe sélectionné à partir de l'attribut data-group-id
            var groupId = $(this).data('group-id');
            var groupName = $(this).data('group-name');
            var groupMembersNumber = $(this).data('group-member-number');
            
            // Mettre à jour la valeur de l'input avec l'ID 'group_id'
            $('#group_id').val(groupId);

            document.getElementById('chatName').innerHTML = groupName;
            document.getElementById('group-member-number').style.display = "";
            document.getElementById('group-member-number').innerHTML = "+" + groupMembersNumber;
            document.getElementById('span-group-member-number').innerHTML = groupMembersNumber;

            // Mettre à null la valeur de l'input de l'utilisateur avec l'ID 'receiver_id'
            $('#receiver_id').val(null);
        });
    });
</script>

{{-- Direct Message --}}
<script>
    // Fonction pour charger les conversations
    function loadConversation(userId) {
        const authUserId = {{ Auth::user()->id }};
        $.ajax({
            url: '/messages/' + userId,
            method: 'GET',
            success: function(data) {
                $('#chat-conversation-list').empty();
                let lastMessageDate = null;

                $.each(data, function(index, conversation) {
                    const conversationDate = conversation.created_at;
                    const date = new Date(conversationDate);

                    const formattedDate = date.toLocaleDateString('en-EN', {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });
                    const formattedTime = date.toLocaleTimeString([], {
                        hour: '2-digit',
                        minute: '2-digit',
                        second: '2-digit'
                    });

                    if (lastMessageDate !== formattedDate) {
                        $('#chat-conversation-list').append(`
                            <li class="chat-list">
                                <div class="chat-day-title mt-2">
                                    <span class="title border rounded-pill">${formattedDate}</span>
                                </div>
                            </li>
                        `);
                        lastMessageDate = formattedDate;
                    }

                    const fullFormattedDateTime = `${formattedTime}`;
                    let fileHtml = '';
                    if (conversation.files && conversation.files.length > 0) {
                        fileHtml = `<div class="chat-files"><div class="chat-file"><ul class="d-flex flex-wrap gap-2 list-inline message-img mb-0">`;
                        conversation.files.forEach(function(file) {
                            const fileExtension = file.file_path.split('.').pop().toLowerCase();
                            if (['jpeg', 'jpg', 'png', 'gif', 'webp', 'svg', 'bmp', 'ico'].includes(fileExtension)) {
                                fileHtml += `<li class="list-inline-item message-img-list me-0"><div><a href="/storage/${file.file_path}" class="thumb preview-thumb image-popup"><img src="/storage/${file.file_path}" class="img-fluid" alt="${file.fileName || file.file_path.split('/').pop()}"></a></div></li>`;
                            } else {
                                fileHtml += `<div class="card shadow-none p-2 mb-0"><div class="d-flex align-items-center"><div class="avatar-sm me-3 ms-0 flex-shrink-0"><div class="avatar-title bg-light text-muted rounded font-size-20"><i class="mdi mdi-file-document-outline"></i></div></div><div class="flex-1"><div class="text-start"><h5 class="font-size-14 mb-1">${file.fileName}</h5><p class="text-muted font-size-13 mb-0">${file.fileSize}</p></div></div><div class="ms-5"><a href="/storage/${file.file_path}" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download"><i class="mdi mdi-download text-muted fs-5"></i></a></div></div></div>`;
                            }
                        });
                        fileHtml += `</ul></div></div>`;
                    }

                    if (conversation.sender_id == authUserId) {
                        $('#chat-conversation-list').append(`
                            <li class="chat-list right">
                                <div class="conversation-list">
                                    <div class="d-flex">
                                        <div class="chat-user">
                                            <img src="${conversation.sender_profile}" class="avatar-sm img-fluid rounded-circle" alt="">
                                        </div>
                                        <div class="flex-1 chat-arrow">
                                            <div class="d-flex justify-content-end">
                                                <div class="ctext-wrap">
                                                    <p class="mb-0">${conversation.content}</p>
                                                    ${fileHtml}
                                                </div>
                                            </div>
                                            <div class="conversation-name fw-medium text-primary mb-2 mt-1">${'You'} <small class="chat-time text-muted fw-medium">${fullFormattedDateTime}</small></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        `);
                    } else {
                        $('#chat-conversation-list').append(`                                 
                            <li class="chat-list">
                                <div class="conversation-list">
                                    <div class="d-flex">
                                        <div class="chat-user">
                                            <img src="${conversation.receiver_profile}" class="avatar-sm img-fluid rounded-circle" alt="">
                                        </div>
                                        <div class="flex-1 chat-arrow">
                                            <div class="d-flex">
                                                <div class="ctext-wrap">
                                                    <p class="mb-0">${conversation.content}</p>
                                                    ${fileHtml}
                                                </div>
                                            </div>
                                            <div class="conversation-name fw-medium text-primary mb-2 mt-1">${conversation.sender.name} <small class="chat-time text-muted fw-medium">${fullFormattedDateTime}</small></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        `);                                
                    }
                });
                scrollToBottom("chat-conversation-list", "chat-conversation");
            },
            error: function(err) {
                console.error(err);
                alert('Erreur lors du chargement des conversations');
            }
        });
    }

    $(document).ready(function() {
        // Écouter le clic pour déclencher le chargement
        $('.chat-user-link').on('click', function(e) {
            e.preventDefault();
            const userId = $(this).data('user-id');
            const authUserId = {{ Auth::user()->id }};
            loadConversation(userId, authUserId);
        });
    });
</script>

{{-- Group Message --}}
<script>
    function loadGroupMessages(groupId) {
        const authUserId = {{ Auth::user()->id }};

        $.ajax({
            url: `/groupmessages/${groupId}`,
            method: 'GET',
            success: function(data) {
                $('#chat-conversation-list').empty();
                let lastMessageDate = null;

                $.each(data, function(index, conversation) {
                    const conversationDate = new Date(conversation.created_at);
                    const formattedDate = conversationDate.toLocaleDateString('fr-FR', {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });
                    const formattedTime = conversationDate.toLocaleTimeString([], {
                        hour: '2-digit',
                        minute: '2-digit',
                        second: '2-digit'
                    });

                    if (lastMessageDate !== formattedDate) {
                        $('#chat-conversation-list').append(`
                            <li class="chat-list">
                                <div class="chat-day-title mt-2">
                                    <span class="title border rounded-pill">${formattedDate}</span>
                                </div>
                            </li>
                        `);
                        lastMessageDate = formattedDate;
                    }

                    const isAuthUser = conversation.sender_id == authUserId;
                    const profileImg = isAuthUser ? conversation.sender_profile : conversation.receiver_profile;
                    const userName = isAuthUser ? 'You' : conversation.sender.name;
                    const messageSide = isAuthUser ? 'right' : '';

                    $('#chat-conversation-list').append(`
                        <li class="chat-list ${messageSide}">
                            <div class="conversation-list">
                                <div class="d-flex">
                                    <div class="chat-user">
                                        <img src="${profileImg}" class="avatar-sm img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="flex-1 chat-arrow">
                                        <div class="d-flex ${isAuthUser ? 'justify-content-end' : ''}">
                                            <div class="ctext-wrap">
                                                <p class="mb-0">${conversation.content}</p>
                                            </div>
                                            <div class="dropdown align-self-end">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-star-outline me-2"></i>Star</a>
                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);"><i class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item" href="javascript: void(0);"><i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                            ${userName} <small class="chat-time text-muted fw-medium">${formattedTime}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    `);
                });

                scrollToBottom("chat-conversation-list", "chat-conversation");
            },
            error: function(err) {
                console.error(err);
                alert('Erreur lors du chargement des conversations');
            }
        });
    }

    $(document).ready(function() {
        $('.chat-group-link').on('click', function(e) {
            e.preventDefault();
            const groupId = $(this).data('group-id'); // Récupérer l'ID du groupe
            loadGroupMessages(groupId); // Appeler la fonction pour charger les messages
        });
    });
</script>

{{-- Send message form --}}
<script type="text/javascript">
    $(document).ready(function() {
        // Gérer la soumission du formulaire avec AJAX 
        $('#send-message-form').off("submit").on("submit", function (e) {
            e.preventDefault(); // Empêche le rechargement de la page

            var formData = new FormData(this); // Récupère le contenu du formulaire

            // Envoyer la requête AJAX pour soumettre le message
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'), // L'URL spécifiée dans le formulaire
                data: formData,
                processData: false, // Nécessaire pour envoyer des fichiers
                contentType: false, // Nécessaire pour l'envoi de fichiers
                success: function(response) {
                    // Met à jour l'interface avec le nouveau message sans recharger
                    getChatList(response.content, "chat-conversation-list", response.sender);

                    // console.log(response.files.file_path);
                    // $(".chat-conversation-list").html(response); // Mettre à jour uniquement la liste des groupes
                    
                    // Efface le champ de message après envoi
                    $('#chat-input').val('');
                    let preview = document.getElementById('preview').innerHTML = ''; // Conteneur d'aperçu

                    // Faire défiler jusqu'en bas après l'ajout du message
                    scrollToBottom("chat-conversation-list", "chat-conversation");
                },
                error: function(response) {
                    console.log("Erreur lors de l'envoi du message", response);
                }
            });
        });
    });

    // Fonction pour ajouter le message dans la liste de discussion
    var getChatList = function(message, listId, name) {
        var time = (new Date()).toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });
        var listElement = document.getElementById(listId);

        // Ajoute une vérification si des fichiers sont attachés
        var fileHtml = '';        

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
                                    ${fileHtml} <!-- Afficher les fichiers s'ils existent -->
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
                                <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                    ${name} <small class="chat-time text-muted fw-medium">${time}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        `);

        // Attacher des événements aux nouveaux éléments pour la suppression
        attachDeleteEvent(listElement);
    };

    // Fonction pour attacher un événement de suppression
    function attachDeleteEvent(listElement) {
        listElement.querySelectorAll(".delete-chat-item").forEach(function(deleteBtn) {
            deleteBtn.addEventListener("click", function() {
                var chatItem = deleteBtn.closest(".chat-list");
                chatItem.remove();
            });
        });
    }

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
</script>

{{-- Pusher channel function --}}
<script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('7b58256c7e5bb4ae5d01', {
        cluster: 'eu'
    });

    var channel = pusher.subscribe('user-messages');
    const myId = {{ Auth::user()->id }};
    var currentConversationId;
    var currentGroupId;
    // var userIdCatch = document.getElementById('receiver_id').value;
    // var groupIdCatch = document.getElementById('group_id').value;

    document.querySelectorAll('.chat-user-link').forEach(function(element) {
        element.addEventListener('click', function() {
            // Récupérer l'ID de conversation sélectionné à partir de l'attribut data-user-id
            currentConversationId = this.getAttribute('data-user-id');   
            currentGroupId = null;
        });
    });

    document.querySelectorAll('.chat-group-link').forEach(function(element) {
        element.addEventListener('click', function() {
            // Récupérer l'ID du groupe sélectionné à partir de l'attribut data-group-id
            currentGroupId = this.getAttribute('data-group-id');   
            currentConversationId = null;   
        });
    });

    channel.bind('user-message', function(data) {
        console.log(JSON.stringify(data));
        console.log('direct chat test ' +currentConversationId);
        console.log('Group test ' +currentGroupId);

        if (currentConversationId != null) {
            console.log('New Direct chat message');
            loadConversation(currentConversationId);
        }

        if (currentGroupId != null) {
            console.log('New group message');            
            loadGroupMessages(currentGroupId);
        }

        // Vérifier si le message est pour la discussion courante (privée ou de groupe)
        // if (data.conversation_id === currentConversationId || data.group_id === currentGroupId) {
        //     if (data.sender_id != myId) {
                
        //     }
        // } else {
        //     // Afficher une notification pour des messages dans une autre discussion
        //     updateUnreadMessageCounter(data.conversation_id);
        // }
    });

    // Fonction pour mettre à jour le compteur de messages non lus
    function updateUnreadMessageCounter(conversationId) {
        var counter = document.getElementById("unread-counter-" + conversationId);
        if (counter) {
            var count = parseInt(counter.innerText, 10) || 0;
            counter.innerText = count + 1;
        }
    }
</script>