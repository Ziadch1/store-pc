<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Delete Account
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
        </p>
    </header>

    <button class="delete-account-button" onclick="openModal('confirm-user-deletion')">Delete Account</button>

    <div id="confirm-user-deletion-modal" class="modal">
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            <input type="hidden" name="_token" value="YOUR_CSRF_TOKEN">
            <input type="hidden" name="_method" value="delete">

            <h2 class="text-lg font-medium text-gray-900">
                Are you sure you want to delete your account?
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
            </p>

            <div class="mt-6">
                <label for="password" class="sr-only">Password</label>
                <input id="password" name="password" type="password" class="mt-1 block w-3/4" placeholder="Password">

                <div class="input-error-message">Error message for password field</div>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="button" onclick="closeModal()">Cancel</button>
                <button type="submit" class="delete-account-button ml-3">Delete Account</button>
            </div>
        </form>
    </div>
</section>

<style>
    .space-y-6 {
        margin-bottom: 1.5rem;
    }
    .text-lg {
        font-size: 1.125rem;
    }
    .font-medium {
        font-weight: 500;
    }
    .text-gray-900 {
        color: #1a202c;
    }
    .mt-1 {
        margin-top: 0.25rem;
    }
    .text-sm {
        font-size: 0.875rem;
    }
    .text-gray-600 {
        color: #4a5568;
    }
    .delete-account-button {
        background-color: #e53e3e;
        color: #fff;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        cursor: pointer;
    }
    .delete-account-button:hover {
        background-color: #c53030;
    }
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .modal form {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 1rem;
        border-radius: 0.25rem;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }
    .modal form h2 {
        margin-bottom: 0.5rem;
    }
    .input-error-message {
        color: #e53e3e;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }
</style>

<script>
    function openModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = "block";
    }

    function closeModal() {
        var modal = document.getElementById("confirm-user-deletion-modal");
        modal.style.display = "none";
    }
</script>
