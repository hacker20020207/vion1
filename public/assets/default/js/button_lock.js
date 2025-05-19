document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
    $.toast({text:this_button_locked});
});

document.addEventListener('keyup', function(e) {
    if (e.code === "PrintScreen") {
        e.preventDefault();
        $.toast({text:this_button_locked});
    }
});
document.addEventListener('keydown', function(e) {
    // F12 (Developer Tools)
    if (e.key === "F12") {
        e.preventDefault();
        $.toast({text:this_button_locked});
    }

    // Ctrl+U (view source), Ctrl+S (save), Ctrl+Shift+I (inspect)
    if ((e.ctrlKey && e.code === 'KeyU') ||
        (e.ctrlKey && e.code === 'KeyS') ||
        (e.ctrlKey && e.shiftKey && e.code === 'KeyI') ||
        (e.ctrlKey && e.shiftKey && e.code === 'KeyJ')) {
        e.preventDefault();
        $.toast({text: this_button_locked});
    }
    // Ctrl or ⌘Cmd + U
    if ((e.ctrlKey || e.metaKey) && e.code === 'KeyU') {
        e.preventDefault();
        $.toast({ text: this_button_locked });
    }

    // Ctrl or ⌘Cmd + S
    if ((e.ctrlKey || e.metaKey) && e.code === 'KeyS') {
        e.preventDefault();
        $.toast({ text: this_button_locked });
    }

    // Ctrl or ⌘Cmd + Shift + I
    if ((e.ctrlKey || e.metaKey) && e.shiftKey && e.code === 'KeyI') {
        e.preventDefault();
        $.toast({ text: this_button_locked });
    }

    // Ctrl or ⌘Cmd + Shift + J (in some browsers)
    if ((e.ctrlKey || e.metaKey) && e.shiftKey && e.code === 'KeyJ') {
        e.preventDefault();
        $.toast({ text: this_button_locked });
    }

});
