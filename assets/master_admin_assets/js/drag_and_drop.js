// Function to set up drag-and-drop zones
function setupDropZone(dropZoneId, inputId) {
    const dropZone = document.getElementById(dropZoneId);
    const fileInput = document.getElementById(inputId);

    dropZone.addEventListener('click', () => fileInput.click());

    dropZone.addEventListener('dragover', (event) => {
        event.preventDefault();
        dropZone.classList.add('drag-over');
    });

    dropZone.addEventListener('dragleave', () => dropZone.classList.remove('drag-over'));

    dropZone.addEventListener('drop', (event) => {
        event.preventDefault();
        dropZone.classList.remove('drag-over');

        if (event.dataTransfer.files.length) {
            fileInput.files = event.dataTransfer.files; // Assign dropped files to input
            displaySelectedFile(dropZone, event.dataTransfer.files[0]);
        }
    });

    fileInput.addEventListener('change', () => {
        if (fileInput.files.length) {
            displaySelectedFile(dropZone, fileInput.files[0]);
        }
    });
}

// Function to display the selected file name or preview image
function displaySelectedFile(dropZone, file) {
    const allowedTypes = ['image/png', 'image/jpeg', 'image/x-icon'];
    if (allowedTypes.includes(file.type)) {
        const reader = new FileReader();
        reader.onload = () => {
            dropZone.innerHTML = `<img src="${reader.result}" alt="Preview" style="max-width: 100%; max-height: 100px;" />`;
        };
        reader.readAsDataURL(file);
    } else {
        dropZone.innerHTML = '<span>Invalid file type. Please upload an image.</span>';
    }
}

// Initialize the drop zones
setupDropZone('faviconDropZone', 'business_favicon');
setupDropZone('logoDropZone', 'business_logo');
