#Importando Librerías
from PIL import Image
import os

if __name__ == '__main__':
    URL_PATH = "/home/canaima/Documentos/projects/tu-suministro/img/productos/seguridad/"
    for folderName, subfolders, filenames in os.walk(URL_PATH):
	 
        for subfolder in subfolders:
            pass
        
        for file in filenames:
            print(f"working at imagen {file[:-4]}")
            img = Image.open(URL_PATH + file)
            img_resize = img.resize((350, 350))
            img_resize = img_resize.convert('RGB')
            img_resize.save(URL_PATH + file[:-3] + 'jpg')
            print(f"imagen {file[:-4]} has saved!")
        print('')
