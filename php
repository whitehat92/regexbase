from beginning until a word (name)
preg_replace("/^.*?(?=name)/","<replace here>",$file)


url
preg_replace("/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i","",$file)
