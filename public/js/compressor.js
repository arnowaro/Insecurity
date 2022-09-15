import Compressor from 'compressorjs';
var fileInput = document.getElementById("images");


inputImage.addEventListener("change", async function () {
  let compressedImages = [];
  // the function uses the file input dom element directly.
  // compressedImages is an empty array which will contain
  // the compressed images after processing.
  await compressImages(fileInput, compressedImages);
  console.log(compressedImages.length);
  let formData = new FormData();
  for(let i = 0 ; i < compressedImages.length ; i++){
        formData.append('files[]', compressedImages[i]);
    }
    console.log('remplacement ok');
});

async function compressImages(fileInput, output) {
  return new Promise(async function (resolve) {
    let numProcessedImages = 0;
    let numImagesToProcess = fileInput.files.length;
    for (let i = 0; i < numImagesToProcess; i++) {
      const file = fileInput.files[i];
      await new Promise((resolve) => {
        new Compressor(file, {
          quality: 0.5,
          maxWidth: 1920,
          maxHeight: 1080,
          success(result) {
            output.push(result);
            resolve();
          }
        });
      });
      numProcessedImages += 1;
    }
    if (numProcessedImages === numImagesToProcess) {
      resolve();
    }
  });
}
