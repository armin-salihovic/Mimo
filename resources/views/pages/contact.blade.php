@php
    $meta = [
       "title" => "Monument and Memorial Centre, Žuč | Emir Salihović Mimo",
       "description" => "A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-zuc-thumbnail.jpg",
    ];
@endphp

<x-main-layout :meta="$meta">
    <x-message-box :open="true" type="success" />
    <div class="mx-auto" id="contactPage">
        <x-page-title title="Contact" />

        <div class="flex flex-col lg:gap-10 pb-48 items-center">
            <div class="w-full pb-12 lg:pb-24 lg:w-5/12 px-6 mb-12 text-lg md:text-xl text-center mb-16">
                <p class="mb-12 text-3xl">If you have any questions or comments for Mimo, please reach out via email, or send a message using the contact form below.</p>
                <div class="flex flex-col text-2xl md:text-3xl" id="email-address"></div>
            </div>
            <div class="w-full lg:w-6/12">
                <div id="app"></div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            let messageBox = {
                open: false,
                type: '',
                message: {
                    title: '',
                    content: [],
                }
            };

            let emailData = {
                name: '',
                email: '',
                subject: '',
                message: '',
            };

            let validations = {
                name: {
                    errors: false,
                    message: null,
                },
                email: {
                    errors: false,
                    message: null,
                },
                subject: {
                    errors: false,
                    message: null,
                },
                message: {
                    errors: false,
                    message: null,
                },
            };

            const nameField = document.getElementById('name');

            let submitted = false;
            let sending = false;

            document.addEventListener('DOMContentLoaded', function () {
                renderApp();
            });

            function registerEvents() {
                document.getElementById('name').addEventListener('input', function (event) {
                    emailData.name = event.target.value;
                    validateName();
                    renderNameErrors();
                });

                document.getElementById('email').addEventListener('input', function (event) {
                    emailData.email = event.target.value;
                    renderEmailErrors();
                });

                document.getElementById('subject').addEventListener('input', function (event) {
                    emailData.subject = event.target.value;
                    validateSubject();
                    renderSubjectErrors()
                });

                document.getElementById('message').addEventListener('input', function (event) {
                    emailData.message = event.target.value;
                    validateMessage();
                    renderMessageErrors()
                });

                document.getElementById('submit').addEventListener('click', function (event) {
                    sendEmail().then(r => {
                        checkForErrors();
                        renderApp();
                    });

                });

                document.getElementById('name').addEventListener('focus', function() {
                });

                document.getElementById('email').addEventListener('focus', function() {
                });

                document.getElementById('subject').addEventListener('focus', function() {
                });

                document.getElementById('message').addEventListener('focus', function() {
                });
            }

            const renderNameErrors = () => validations.name.errors ? `<small class="text-red-500">${ validations.name.message }</small>` : ``;
            const renderEmailErrors = () => validations.email.errors ? `<small class="text-red-500">${ validations.email.message }</small>` : ``;
            const renderSubjectErrors = () => validations.subject.errors ? `<small class="text-red-500">${ validations.subject.message }</small>` : ``;
            const renderMessageErrors = () => validations.message.errors ? `<small class="text-red-500">${ validations.message.message }</small>` : ``;

            const setName = (name) => document.getElementById('name').value = name;
            const setSubject = (subject) => document.getElementById('subject').value = subject;
            const setEmail = (email) => document.getElementById('email').value = email;
            const setMessage = (message) => document.getElementById('message').value = message;

            function setFields() {
                setName(emailData.name);
                setSubject(emailData.subject);
                setEmail(emailData.email);
                setMessage(emailData.message);
            }

            function renderApp() {
                const appElement = document.getElementById('app');

                appElement.innerHTML = `
        <div class="md:col-span-3 col-span-6 px-6">
            <div class="mb-10 3xl:mb-12 4xl:mb-20 w-full flex flex-col sm:flex-row">
                <div class="flex flex-col w-full sm:w-1/2 mb-10 sm:mb-0 sm:pr-5 3xl:pr-7 4xl:pr-10">
                    <input id="name" class="${validations.name.errors ? 'border-red-500' : 'border-black focus:border-green-400'} py-2 3xl:py-2.5 4xl:py-4 border-b text-gray-600 placeholder-gray-400 outline-none" id="name" type="text" placeholder="Name">
                    ${renderNameErrors()}
                </div>
                <div class="flex flex-col w-full sm:w-1/2 sm:pl-5 3xl:pl-7 4xl:pl-10">
                    <input id="email" class="${validations.email.errors ? 'border-red-500' : 'border-black focus:border-green-400'} py-2 3xl:py-2.5 4xl:py-4 border-b text-gray-600 placeholder-gray-400 outline-none" id="email" type="email" placeholder="Email">
                    ${renderEmailErrors()}
                </div>
            </div>
            <div class="flex flex-col w-full mb-10 3xl:mb-12 4xl:mb-20">
                <input id="subject" class="${validations.subject.errors ? 'border-red-500' : 'border-black focus:border-green-400 '} py-2 3xl:py-2.5 4xl:py-4 border-b text-gray-600 placeholder-gray-400 outline-none" id="subject" type="text" placeholder="Subject">
                    ${renderSubjectErrors()}
            </div>
            <div class="flex flex-col w-full mb-5 3xl:mb-7 4xl:mb-10">
                <textarea id="message" placeholder="Message" class="${validations.message.errors ? 'border-red-500' : 'border-black focus:border-green-400'} h-48 3xl:h-64 4xl:h-96 resize-none py-2 3xl:py-2.5 4xl:py-4 border-b text-gray-600 placeholder-gray-400 outline-none"></textarea>
                ${renderMessageErrors()}
            </div>
            <div class="flex justify-center">
                <button id="submit" class="py-2 3xl:py-2.5 4xl:py-4 px-10 3xl:px-12 4xl:px-20 mr-2 3xl:mr-2.5 4xl:mr-4 mb-2 3xl:mb-2.5 4xl:mb-4 text-base font-bold focus:outline-none bg-white border border-black focus:z-10 focus:ring-4 focus:ring-gray-200 transition ease-in-out ${sending ? 'bg-black text-white cursor-not-allowed' : 'hover:bg-black hover:text-white'}">
                    <span>Send</span>
                </button>
            </div>

        </div>
    `;

                checkForErrors();
                setFields();
                registerEvents();

            }

            function checkForErrors() {
                renderNameErrors();
                renderEmailErrors();
                renderSubjectErrors();
                renderMessageErrors();
            }

            function validateName() {
                if (!submitted) return;

                const nameInput = document.getElementById('name');
                if (nameInput.value === '') {
                    validations.name.errors = true;
                    validations.name.message = 'Name is required';
                } else {
                    validations.name.errors = false;
                }
            }

            function validateSubject() {
                if (!submitted) return;

                const subjectInput = document.getElementById('subject');
                if (subjectInput.value === '') {
                    validations.subject.errors = true;
                    validations.subject.message = 'Subject is required';
                } else {
                    validations.subject.errors = false;
                }
            }

            function validateMessage() {
                if (!submitted) return;

                const messageInput = document.getElementById('message');
                if (messageInput.value === '') {
                    validations.message.errors = true;
                    validations.message.message = 'Message is required';
                } else {
                    validations.message.errors = false;
                }
            }

            function closeMessageBox() {
                const messageBoxElement = document.getElementById('msgBox');
                messageBoxElement.classList.remove('message-box__opened');
            }

            async function sendEmail() {
                submitted = true;

                if (validateForm() || sending) return;

                sending = true;

                sending = false;
                submitted = false;

                try {
                    const response = await fetch('http://mimo.test/api/send-email', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(emailData)
                    });

                    if (response.ok) {
                        openMessageBox('success', 'Message Sent!', ['Thanks for reaching out!', 'We\'ll get back to you as soon as possible!']);
                        clearEmailData();
                        renderApp();
                    } else {
                        openMessageBox('fail', 'Unexpected Server Error', ['Oops... This is embarrassing... :(', `Please email me directly at <a class="underline" target="_blank" rel="noreferrer" href="mailto:info@mimo.ba}">info@mimo.ba</a>`]);
                        renderApp();
                    }

                } catch (error) {
                    openMessageBox('fail', 'Unexpected Server Error', ['Oops... This is embarrassing... :(', `Please email me directly at <a class="underline" target="_blank" rel="noreferrer" href="mailto:info@mimo.ba}">info@mimo.ba</a>`]);
                    renderApp();
                }
            }

            const formHasErrors = () => validations.name.errors || validations.subject.errors || validations.message.errors || validations.email.errors;

            function validateForm() {
                validateName();
                validateSubject();
                validateMessage();
                validateEmail();
                return formHasErrors();
            }

            function validateEmail() {
                if (!submitted) return;

                const emailInput = document.getElementById('email');
                const emailRegex = '(?:[a-z0-9!#$%&\'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5b\x5d-\x7f]|\\\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\\])';

                if (emailInput.value === '') {
                    validations.email.errors = true;
                    validations.email.message = 'Email is required';
                } else if (!emailInput.value.match(emailRegex)) {
                    validations.email.message = 'Please enter a valid email';
                    validations.email.errors = true;
                } else {
                    validations.email.errors = false;
                }
            }

            function clearEmailData() {
                emailData.name = '';
                emailData.email = '';
                emailData.subject = '';
                emailData.message = '';

                validations.name.errors = false;
                validations.email.errors = false;
                validations.subject.errors = false;
                validations.message.errors = false;
            }

            function openMessageBox(type, title, messages) {
                var msgBox = document.getElementById('msgBox');
                var msgBoxTitle = document.getElementById('msgBoxTitle');
                var msgBoxMsgs = document.getElementById('msgBoxMsgs');
                msgBox.classList.add('message-box__opened');

                if (type === 'success') {
                    msgBox.classList.add('bg-green-800');
                } else {
                    msgBox.classList.add('bg-red-800');
                }

                msgBoxTitle.innerHTML = title;

                var messagesString = '';
                for (const message of messages) {
                    messagesString += `<p class="text-white text-base md:text-lg 3xl:text-2xl 4xl:text-3xl">${message}</p>`;

                }
                msgBoxMsgs.innerHTML = messagesString;
            }

            // protected

            var emailAddressEl = document.getElementById('email-address')
            emailAddressEl.innerHTML = `<a class="pb-1" href="mailto:info@mimo.ba">info@mimo.ba</a>`;

            var contactPage = document.getElementById('contactPage')
            contactPage.addEventListener('click', (el) => {
                closeMessageBox();
            })


        </script>
    @endpush

</x-main-layout>
