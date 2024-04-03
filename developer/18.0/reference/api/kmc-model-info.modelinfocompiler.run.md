<!-- Do not edit this file. It is automatically generated by API Documenter. -->

[Home](./index.md) &gt; [@keymanapp/kmc-model-info](./kmc-model-info.md) &gt; [ModelInfoCompiler](./kmc-model-info.modelinfocompiler.md) &gt; [run](./kmc-model-info.modelinfocompiler.run.md)

## ModelInfoCompiler.run() method

Builds .model\_info file with metadata from the model and package source file. Returns an object containing binary artifacts on success. The files are passed in by name, and the compiler will use callbacks as passed to the [ModelInfoCompiler.init()](./kmc-model-info.modelinfocompiler.init.md) function to read any input files by disk.

This function is intended for use within the lexical-models repository. While many of the parameters could be deduced from each other, they are specified here to reduce the number of places the filenames are constructed.

**Signature:**

```typescript
run(inputFilename: string, outputFilename?: string): Promise<ModelInfoCompilerResult>;
```

## Parameters

|  Parameter | Type | Description |
|  --- | --- | --- |
|  inputFilename | string |  |
|  outputFilename | string | _(Optional)_ |

**Returns:**

Promise&lt;[ModelInfoCompilerResult](./kmc-model-info.modelinfocompilerresult.md)<!-- -->&gt;

Binary artifacts on success, null on failure.
