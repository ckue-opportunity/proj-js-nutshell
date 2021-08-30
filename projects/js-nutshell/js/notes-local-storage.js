'use strict'

const NOTES_DATA_ID = 'js-nutshell-notes';

// Buffer list of notes for easy manipulation.
var _notes;

/**
 * Read exisiting notes from local storage. Note data 
 * is packed and formatted as a JSON string.
 * 
 * @returns Returns the list of note data objects or an
 *          empty array if there are no notes available yet.
 */
const getSavedNotes = () => {
    let notesJSON = localStorage.getItem(NOTES_DATA_ID);

    try{
        _notes = notesJSON ? JSON.parse(notesJSON) : [];
    } 
    catch (e) {
        _notes = [];
    } 
    
    return _notes;
}

/**
 * Save the given list of note objects to local storage.
 * 
 * @param {Array} notes 
 */
const saveNotes = () => {
    localStorage.setItem(NOTES_DATA_ID, JSON.stringify(_notes));
}

/**
 * Set the note by the given identifier.
 * 
 * @param {String} id 
 * @param {Object} note 
 */
const setNote = (id, note) => {
    let index = findNoteIndex(id);

    if (index > -1) {
        // replace note
        _notes.splice(index, 1, id);
    }
    else {
        // add note
        _notes.push(note);
    }

    saveNotes();
}

/**
 * Removes the note object with the given id.
 * 
 * @param {String} id 
 */
const removeNote = (id) => {
    let index = findNoteIndex(id);

    if (index > -1) {
        _notes.splice(index, 1);
        saveNotes();
    }
}

// SUPPORT ---------------------------------------------------------

/**
 * Checks the _notes buffer and gets the index of the 
 * indicated node or -1 if not found.
 * 
 * @param {String} id 
 * 
 * @returns {int}
 */
const findNoteIndex = (id) => {
    if (!_notes) getSavedNotes();
    return _notes.findIndex((note) => note.id === id);
}

/**
 * Builds a note identifier, using the current filename,
 * the name of its parent folder and also an UUID.
 * 
 * @returns {String} Returns the identifier.
 */
const buildNoteID = () => {
    // Associate the note with the current page with its
    // parent folder and filename.
    let fileName = location.href.split("/").slice(-2);

    // Append an UUID before returning the resulting ID string.
    return fileName + '::' + create_UUID();
}

/**
 * Creates UUID (Universally Unique I-D-entifier), thanks to
 * https://www.w3resource.com/javascript-exercises/javascript-math-exercise-23.php
 * 
 * @returns {String} returns the UUID.
 */
const create_UUID = () => {
    let dt = new Date().getTime();
    let uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        let r = (dt + Math.random()*16)%16 | 0;
        dt = Math.floor(dt/16);
        return (c=='x' ? r :(r&0x3|0x8)).toString(16);
    });

    return uuid;
}
