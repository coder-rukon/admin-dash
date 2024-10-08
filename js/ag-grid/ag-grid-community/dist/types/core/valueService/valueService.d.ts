import type { NamedBean } from '../context/bean';
import { BeanStub } from '../context/beanStub';
import type { BeanCollection } from '../context/context';
import type { AgColumn } from '../entities/agColumn';
import type { IRowNode } from '../interfaces/iRowNode';
export declare class ValueService extends BeanStub implements NamedBean {
    beanName: "valueService";
    private expressionService;
    private columnModel;
    private valueCache;
    private dataTypeService?;
    wireBeans(beans: BeanCollection): void;
    private cellExpressions;
    private isTreeData;
    private initialised;
    private isSsrm;
    postConstruct(): void;
    private init;
    getValue(column: AgColumn, rowNode?: IRowNode | null, forFilter?: boolean, ignoreAggData?: boolean): any;
    parseValue(column: AgColumn, rowNode: IRowNode | null, newValue: any, oldValue: any): any;
    formatValue(column: AgColumn, node: IRowNode | null, value: any, suppliedFormatter?: (value: any) => string, useFormatterFromColumn?: boolean): string | null;
    private getOpenedGroup;
    /**
     * Sets the value of a GridCell
     * @param rowNode The `RowNode` to be updated
     * @param colKey The `Column` to be updated
     * @param newValue The new value to be set
     * @param eventSource The event source
     * @returns `True` if the value has been updated, otherwise`False`.
     */
    setValue(rowNode: IRowNode, colKey: string | AgColumn, newValue: any, eventSource?: string): boolean;
    private callColumnCellValueChangedHandler;
    private setValueUsingField;
    private executeFilterValueGetter;
    private executeValueGetter;
    private getValueCallback;
    getKeyForNode(col: AgColumn, rowNode: IRowNode): any;
}
