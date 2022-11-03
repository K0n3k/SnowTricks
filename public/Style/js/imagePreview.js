jQuery(document).ready(function () {
    const input = document.querySelector("input[type=file]");
const preview = document.querySelector(".preview");
input.addEventListener('change', updateImageDisplay);

function updateImageDisplay() {
while(preview.firstChild) {
  preview.removeChild(preview.firstChild);
}

const curFiles = input.files;
if (curFiles.length === 0) {
  const para = document.createElement('p');
  para.textContent = 'No files currently selected for upload';
  preview.appendChild(para);
} else {
  var $form = $('#form');

  for (const file of curFiles) {
    const listItem = document.createElement('div');
    
    
    listItem.classList.add('col', 'mb-2', 'text-center');
    if (validFileType(file)) {
      
    const para = document.createElement('div');
    para.classList.add('form-check');
    
      const image = document.createElement('img');
      image.classList.add('bd-placeholder-img', 'card-img-top');
      image.style.height='200px';
      image.style.width='100%';
      image.src = URL.createObjectURL(file);

      listItem.appendChild(image);
      listItem.appendChild(para);
    } else {
      para.textContent = `File name ${file.name}: Not a valid file type. Update your selection.`;
      listItem.appendChild(para);
    }

    preview.appendChild(listItem);
  }
}
}

const fileTypes = [
"image/apng",
"image/bmp",
"image/gif",
"image/jpeg",
"image/pjpeg",
"image/png",
"image/svg+xml",
"image/tiff",
"image/webp",
"image/x-icon"
];

function validFileType(file) {
return fileTypes.includes(file.type);
}

    jQuery('.add-another-collection-widget').click(function (e) {
        var list = jQuery(jQuery(this).attr('data-list-selector'));
        // Try to find the counter of the list or use the length of the list
        var counter = list.data('widget-counter') || list.children().length;

        // grab the prototype template
        var newWidget = list.attr('data-prototype');
        // replace the "__name__" used in the id and name of the prototype
        // with a number that's unique to your emails
        // end name attribute looks like name="contact[emails][2]"
        newWidget = newWidget.replace(/__name__/g, counter);
        // Increase the counter
        counter++;
        // And store it, the length cannot be used if deleting widgets is allowed
        list.data('widget-counter', counter);

        // create a new list element and add it to the list
        var newElem = jQuery(list.attr('data-widget-tags')).html(newWidget);
        newElem.appendTo(list);
    });
  });