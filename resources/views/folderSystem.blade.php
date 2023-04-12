<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Folder System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://kit.fontawesome.com/fa624bee14.js" crossorigin="anonymous"></script>
  
    <script>
        
        const folders = document.querySelectorAll('.folder');
        folders.forEach(folder => {
          const folderContent = folder.querySelector('.folder-content');
          folder.addEventListener('click', () => {
            folder.classList.toggle('active');
            folderContent.classList.toggle('active');
          });
        });
      



function addFolder() {
    const folderSystem = document.querySelector('.folder-system');
    const newFolder = document.createElement('div');
    newFolder.classList.add('folder');
    newFolder.innerHTML = `
        <i class="fas fa-folder"></i>
        <span class="folder-title highlighted" contenteditable="true">Untitled</span>
        <div class="folder-content"></div>
    `;
    folderSystem.insertAdjacentElement('beforeend', newFolder);
    highlightFolderTitle(newFolder);
}
      
        function highlightFolderTitle(folder) {
          var folderTitle = folder.querySelector('.folder-title');
          folderTitle.classList.add('highlighted');
          folderTitle.focus();
          document.execCommand('selectAll', false, null);
        }
      </script>
</head>
<body>
    <div style="display: flex;">
        <div class="folder-system">
            <div class="add-folder-button">
                <i class="fas fa-folder-plus"></i>
                <span onclick="addFolder()">Add Folder</span>
            </div>
            <div class="folder">
                <i class="fas fa-folder"></i>
                <span class="folder-title">Folder 1</span>
       
                <div class="folder-content">
                    <div class="item">Item 1</div>
                    <div class="item">Item 2</div>
                    <div class="item">Item 3</div>
                </div>
            </div>
            <div class="folder" >
                <i class="fas fa-folder"></i>
                <span class="folder-title">Folder 2</span>
                <div class="folder-content">
                    <div class="item">Item 4</div>
                    <div class="item">Item 5</div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>