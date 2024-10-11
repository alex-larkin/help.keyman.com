---
title: addEventListener
---

## Summary

Adds an event listener for user-handling of KeymanWeb events.

## Syntax

```c
keyman.addEventListener(event, func);
```

### Parameters

`event`
:   Type: `string`
:   The name of an event to be generated by the `keyman` object. Please see the [Events section](../events) for more details and examples.

`func`
:   Type: `function`
:   A function to be called when the event is raised. This function should expect a single parameter, which will be set to the originally-generated event object.

### Return Value

`boolean`
:   Returns `true` if successful, otherwise `false`.

## Description

---
**Note:** Standard HTML element events for the KeymanWeb element (focus,
blur, keydown, keypress, etc.) may be intercepted and used to modify the
user interface as necessary. User-defined event handlers should normally
return true to allow other event handling to be processed normally.

---

## Example

```c
keyman.addEventListener('focus', function(e) {
  console.log("Now handling input for control " + e.target "!");
});
```