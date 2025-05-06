// Admin Interface JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all delete buttons with confirmation
    initializeDeleteButtons();
    
    // Initialize loading states for form submissions
    initializeFormSubmissions();
});

/**
 * Initialize delete buttons with confirmation dialog
 */
function initializeDeleteButtons() {
    document.querySelectorAll('[data-confirm]').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const message = this.dataset.confirm || 'Êtes-vous sûr de vouloir effectuer cette action ?';
            const url = this.getAttribute('href') || this.dataset.url;
            
            showConfirmDialog(message, () => {
                if (url) {
                    window.location.href = url;
                }
            });
        });
    });
}

/**
 * Initialize form submissions with loading states
 */
function initializeFormSubmissions() {
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function() {
            const submitButton = this.querySelector('[type="submit"]');
            if (submitButton) {
                submitButton.classList.add('loading');
                submitButton.disabled = true;
            }
        });
    });
}

/**
 * Show a confirmation dialog
 * @param {string} message - The message to display
 * @param {Function} onConfirm - Callback function when confirmed
 */
function showConfirmDialog(message, onConfirm) {
    // Create backdrop
    const backdrop = document.createElement('div');
    backdrop.className = 'confirm-dialog-backdrop';
    
    // Create dialog
    const dialog = document.createElement('div');
    dialog.className = 'confirm-dialog';
    dialog.innerHTML = `
        <div class="confirm-dialog-title">Confirmation</div>
        <div class="confirm-dialog-message">${message}</div>
        <div class="confirm-dialog-buttons">
            <button class="btn btn-secondary" data-action="cancel">Annuler</button>
            <button class="btn btn-danger" data-action="confirm">Confirmer</button>
        </div>
    `;
    
    // Add to document
    document.body.appendChild(backdrop);
    document.body.appendChild(dialog);
    
    // Handle button clicks
    dialog.querySelector('[data-action="cancel"]').addEventListener('click', () => {
        closeDialog();
    });
    
    dialog.querySelector('[data-action="confirm"]').addEventListener('click', () => {
        closeDialog();
        if (typeof onConfirm === 'function') {
            onConfirm();
        }
    });
    
    // Handle backdrop click
    backdrop.addEventListener('click', () => {
        closeDialog();
    });
    
    // Handle escape key
    document.addEventListener('keydown', function escapeHandler(e) {
        if (e.key === 'Escape') {
            closeDialog();
            document.removeEventListener('keydown', escapeHandler);
        }
    });
    
    function closeDialog() {
        backdrop.remove();
        dialog.remove();
    }
}

/**
 * Show a loading state on a button
 * @param {HTMLElement} button - The button element
 */
function showButtonLoading(button) {
    button.classList.add('loading');
    button.disabled = true;
}

/**
 * Hide loading state on a button
 * @param {HTMLElement} button - The button element
 */
function hideButtonLoading(button) {
    button.classList.remove('loading');
    button.disabled = false;
}

/**
 * Show a success message
 * @param {string} message - The message to display
 */
function showSuccess(message) {
    // Implementation for success message
    console.log('Success:', message);
}

/**
 * Show an error message
 * @param {string} message - The message to display
 */
function showError(message) {
    // Implementation for error message
    console.error('Error:', message);
} 