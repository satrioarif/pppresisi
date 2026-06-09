import glob

files = glob.glob('d:/DataPPRE/Deploy/pppresisi/resources/views/**/*.blade.php', recursive=True)

for file in files:
    with open(file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    new_content = content.replace("url(\\'", "url('").replace("\\')", "')")
    
    if content != new_content:
        with open(file, 'w', encoding='utf-8') as f:
            f.write(new_content)
        print(f'Fixed {file}')
